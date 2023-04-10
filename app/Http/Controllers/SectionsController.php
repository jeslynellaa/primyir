<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Section;
use App\Models\Teacher;
use App\Models\Schoolyear;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $currentSY = Schoolyear::where('isCurrent', true)->first();
        // Joining sections, teachers, and users into section_teachers for displaying in sections table
        $section_teachers = DB::table('sections')
            ->join('teachers', 'teachers.id', '=', 'adviser', 'left outer')
            ->join('users', 'users.id', '=', 'teachers.user_id', 'left outer')
            ->where('schoolyear_id', $currentSY->id)
            ->select('sections.id as sect_id','sections.grade_level', 'sections.name', 'sections.adviser', 'users.givenName', 'users.lastName')
            ->orderBy('grade_level')
            ->get()->paginate(10);

        // Getting schoolyear data set for dropdown in forms
        $schoolyears = DB::table('schoolyears')
            ->select('id', 'year_start', 'year_end', 'isCurrent')
            ->orderBy('date_start', 'DESC')
            ->get();

        return view('admin.sections.index', compact('section_teachers', 'schoolyears', 'currentSY'));
    }
    
    public function create(User $user)
    {
        // Joining teachers and users into teachers for select dropdown in forms
        $teachers = DB::table('users')
            ->join('teachers', 'teachers.user_id', '=', 'users.id')
            ->where('users.accountStatus', 'Active')
            ->where('teachers.advisory', 0)
            ->select('teachers.id', 'users.givenName', 'users.lastName')
            ->orderBy('lastName', 'ASC')
            ->get();
        // Getting schoolyear data set for dropdown in forms
        $schoolyears = DB::table('schoolyears')
            ->select('id', 'year_start', 'year_end')
            ->orderBy('date_start', 'DESC')
            ->get();

        return view('admin.sections.create', compact('teachers', 'schoolyears'));
    }

    public function store(Request $request, User $user)
    {
        // Validation of input
        $data = request()->validate([
            'name' => ['required', 'string', 'max:50', 'unique:sections'],
            'grade_level' => ['required'],
            'adviser' => '',
            'schoolyear' => 'required'
        ]);        

        // Creating new section model
        if(isset($request->adviser)){
            $new_section = \App\Models\Section::create([
                'name' => $data['name'],
                'grade_level' => $data['grade_level'],
                'adviser' => $data['adviser'],
                'schoolyear_id' => $data['schoolyear']
            ]);

            // Updating the assigned teacher's record to reflect advisory class
            $assign_teach = \App\Models\Teacher::where('id', '=', $data['adviser'])->first();
            $assign_teach->advisory = 1;
            $assign_teach->save();
            //dd($new_section);
        }
        else{
            $new_section = \App\Models\Section::create([
                'name' => $data['name'],
                'grade_level' => $data['grade_level'],
                'schoolyear_id' => $data['schoolyear']
            ]);
            //dd($new_section);
        }


        return redirect()->back()->with("success","New Section Created!");
    }
    
    public function edit ($id){

        $section = Section::find($id);
        $teachers = DB::table('users')
            ->join('teachers', 'teachers.user_id', '=', 'users.id')
            ->where('users.accountStatus', 'Active')
            ->where('teachers.advisory', 0)
            ->orWhere('teachers.id', $section->adviser)
            ->select('teachers.id', 'users.givenName', 'users.lastName', 'users.middleName')
            ->orderBy('lastName', 'ASC')
            ->get();
        if($section){
            return response()->json([
                'status' =>200,
                'section' =>$section,
                'teachers' => $teachers
            ]);
        }else{
            return response()->json([
                'status' =>404,
                'message' =>"Section Not Found",
            ]);
        }
    }

    public function update(Request $request, $id){

        //dd($request);
        
        $validator = Validator::make($request->all(), [
            'name' => ['string', 'max:50'],
            'grade_level' =>'',
            'adviser' =>'',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }else{
            $section =\App\Models\Section::find($id);
            if($section){
                $section->name = $request->input('name');
                $section->grade_level = $request->input('grade_level');

                if(isset($section->adviser)){
                    if($section->adviser != $request->adviser){
                        $old_adviser = Teacher::where('id', '=', $section->adviser);
                        $old_adviser->update([
                            'advisory' => 0
                        ]);
                        
                        $new_adviser = Teacher::where('id', '=', $request->adviser);
                        $new_adviser->update([
                            'advisory' => 1
                        ]);
                    }
                }
                else{
                    $assign_teach = Teacher::where('id', '=', $request->adviser)->first();
                    $assign_teach->advisory = 1;
                    $assign_teach->save();
                }
                $section->adviser = $request->input('adviser');
                $section->save();

                return response()->json([
                    'status' =>200,
                    'message' => "Changes Saved Successfully!"
                ]);
            }else{
                return response()->json([
                    'status' =>404,
                    'message' =>"Section Not Found",
                ]);
            }
        }
        //return redirect()->back()->with("success","Changes saved successfully");
    }

    public function sections_search(Request $request){
        $currentSY = Schoolyear::where('isCurrent', true)->first();
        $query = $request->input('query');

        $section_teachers = DB::table('sections')
            ->join('teachers', 'teachers.id', '=', 'adviser', 'left outer')
            ->join('users', 'users.id', '=', 'teachers.user_id', 'left outer')
            ->where('name', 'LIKE', "%$query%")
            ->select('sections.id as sect_id','sections.grade_level', 'sections.name', 'sections.adviser', 'sections.schoolyear_id','users.givenName', 'users.lastName')
            ->orderBy('grade_level')
            ->get();
        $section_teachers = $section_teachers->where('schoolyear_id', $currentSY->id);
        //dd($section_teachers);

        // Getting schoolyear data set for dropdown in forms
        $schoolyears = DB::table('schoolyears')
        ->select('id', 'year_start', 'year_end', 'isCurrent')
        ->orderBy('date_start', 'DESC')
        ->get();
        return view('admin.sections.index', compact('section_teachers', 'schoolyears'));
    }
    
    public function sections_filter(Request $request){
        $currentSY = Schoolyear::where('isCurrent', true)->first();
        $grade_level = $request->input('grade_lvl');
        $sy = $request->input('schoolyear');

        $section_teachers =DB::table('sections')
            ->join('teachers', 'teachers.id', '=', 'adviser', 'left outer')
            ->join('users', 'users.id', '=', 'teachers.user_id', 'left outer')
            ->select('sections.id as sect_id','sections.grade_level', 'sections.name', 'sections.adviser', 'sections.schoolyear_id','users.givenName', 'users.lastName')
            ->orderBy('name')
            ->get();
        if(isset($sy) && !isset($grade_level)){
            $section_teachers = $section_teachers->where('schoolyear_id', $sy)->sortBy('grade_level');
        }
        if(isset($grade_level)){
            $section_teachers = $section_teachers->where('grade_level', $grade_level);
            if(isset($sy)){
                $section_teachers = $section_teachers->where('schoolyear_id', $sy);
            }else{
                $section_teachers = $section_teachers->where('schoolyear_id', $currentSY->id);
            }
        }

        // Getting schoolyear data set for dropdown in forms
        $schoolyears = DB::table('schoolyears')
        ->select('id', 'year_start', 'year_end', 'isCurrent')
        ->orderBy('date_start', 'DESC')
        ->get();
        return view('admin.sections.index', compact('section_teachers', 'schoolyears'));
    }

}
