<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Subject;
use App\Models\SubjectClass;
use App\Models\Curriculum;
use App\Models\Schoolyear;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $subjects = DB::table('subjects')
            ->join('curricula', 'curricula.id', '=', 'subjects.curriculum_id')
            ->select('subjects.id','subjects.name', 'subjects.grade_level','subjects.curriculum_id','subjects.schoolyear_id','subjects.elective', 'curricula.name as curriculum')
            ->orderBy('grade_level')
            ->get()->paginate(10);
        //dd($subjects);
        $curricula = DB::table('curricula')
            ->orderBy('name')
            ->get()->paginate(10);

        // Getting schoolyear data set for dropdown in forms
            $schoolyears = DB::table('schoolyears')
            ->select('id', 'year_start', 'year_end')
            ->orderBy('date_start', 'ASC')
            ->get();

        return view('admin.subjects.index', compact('subjects', 'curricula', 'schoolyears'));
    }
    
    public function create(User $user)
    {
        // Getting curricula data set for dropdown in forms
        $curricula = DB::table('curricula')
            ->select('id', 'name')
            ->orderBy('name', 'ASC')
            ->get();
        
        // Getting schoolyear data set for dropdown in forms
        $schoolyears = DB::table('schoolyears')
        ->select('id', 'year_start', 'year_end')
        ->orderBy('date_start', 'ASC')
        ->get();

        return view('admin.subjects.create', compact('curricula', 'schoolyears'));
    }

    public function store(Request $request, User $user)
    {
        // Validation of input
        $data = request()->validate([
            'name' => ['required', 'string', 'max:50'],
            'grade_level' => ['required'],
            'curriculum' => ['required'],
            'schoolyear' => ['required'],
            'elective' => ''
        ]);

        // Checking if the array contains 'elective' property
        if (isset($data['elective'])){
            $new_subject = \App\Models\Subject::create([
                'name' => $data['name'],
                'grade_level' => $data['grade_level'],
                'curriculum_id' => $data['curriculum'],
                'schoolyear_id' => $data['schoolyear'],
                'elective' => $data['elective'],
            ]);
        }
        else{
            // if elective is not set, assign with 0
            $new_subject = \App\Models\Subject::create([
                'name' => $data['name'],
                'grade_level' => $data['grade_level'],
                'curriculum_id' => $data['curriculum'],
                'schoolyear_id' => $data['schoolyear'],
                'elective' => 0,
            ]);
        }
        
        //dd($new_subject);
        return redirect()->back()->with("success","New Subject Created!");
    }

    public function edit ($id){
        $subjectData = Subject::find($id);
        return response()->json([
           'status' =>200,
           'subjectData' =>$subjectData,
       ]);
    }

    public function update(User $user, Request $request){

        //dd($request);
        $this->authorize('create', $user);
        
        $data = request()->validate([
            'name' => ['string', 'max:50'],
            'grade_level' =>'',
            'curriculum' =>'',
            'schoolyear' =>'',
            'elective' => ''
        ]);
        
        $subject =\App\Models\Subject::find($request->subject_id);
        $subject->update($data);
        
        return redirect()->back()->with("success","Changes saved successfully");
    }

    public function show($id)
    {
        $subject_records = DB::table('subjects')
            ->join('subject_classes', 'subject_classes.subject_id', '=', 'subjects.id')
            ->where('subjects.id', $id)
            ->join('curricula', 'subjects.curriculum_id', '=', 'curricula.id')
            ->join('sections', 'subject_classes.section_id', '=', 'sections.id')
            ->join('teachers', 'subject_classes.teacher_id', '=', 'teachers.id')
            ->join('users', 'teachers.user_id', '=', 'users.id')
            ->select('subjects.name as name', 'subjects.grade_level', 'curricula.name as curriculum',
            'sections.name as section', 'sections.grade_level as grade',
            'users.givenName', 'users.middleName', 'users.lastName')
            ->get();
        $subject = DB::table('subjects')
            ->where('subjects.id', $id)
            ->select('subjects.id', 'subjects.name', 'subjects.grade_level', 'subjects.curriculum_id')
            ->first();
        $subject_model = \App\Models\Subject::find($id);
        //dd($student_model);
        //dd($subject_records);
        return view('admin.subjects.view', compact('subject_records', 'subject', 'subject_model'));
    }

    public function create_class(User $user, $id)
    {
        //dd($id);
        $subject = \App\Models\Subject::find($id);
        // Getting curricula data set for dropdown in forms
        $sections = DB::table('sections')
            ->select('id', 'name', 'grade_level')
            ->where('grade_level', $subject->grade_level)
            ->orderBy('grade_level', 'ASC')
            ->orderBy('name', 'ASC')
            ->get();
        
        // Getting schoolyear data set for dropdown in forms
        $schoolyears = DB::table('schoolyears')
        ->select('id', 'year_start', 'year_end')
        ->orderBy('date_start', 'ASC')
        ->get();

        $teachers = DB::table('teachers')
        ->join('users', 'users.id', '=', 'teachers.user_id')
        ->select('teachers.id', 'users.givenName', 'users.middleName','users.lastName')
        ->orderBy('users.lastName', 'ASC')
        ->get();

        return view('admin.subjects.create-class', compact('subject', 'sections', 'schoolyears', 'teachers'));
    }

    public function store_class(Request $request, User $user)
    {
        // Validation of input
        $data = request()->validate([
            'subId' => ['required'],
            'section' => ['required'],
            'teacher' => ['required']
        ]);

        $new_subclass = \App\Models\SubjectClass::create([
            'subject_id' => $data['subId'],
            'section_id' => $data['section'],
            'teacher_id' => $data['teacher']
        ]);
        //dd($new_subclass);
        return redirect()->back()->with("success","New Subject Created!");
    }


    public function curricula_create(User $user)
    {
        return view('admin.subjects.create_curricula');
    }

    public function curricula_store(Request $request, User $user)
    {
        // Validation of input
        $data = request()->validate([
            'name' => ['required', 'string', 'max:50'],
            'acronym' => ['required', 'string'],
            'description' => ['required']
        ]);

        
        $new_curriculum = \App\Models\Curriculum::create([
            'name' => $data['name'],
            'acronym' => $data['acronym'],
            'description' => $data['description']
        ]);

        //dd($new_curriculum);
        return redirect()->back()->with("success","New Curriculum Created!");
    }

    public function curricula_edit (Request $request, User $user, $id){
        $curriculum = Curriculum::find($id);
        
        return view('admin.subjects.edit_curricula', compact('curriculum'));
    }

    public function curricula_update(Request $request, User $user, $id){

        //dd($request->all());
        
        $curriculum = Curriculum::find($id);
        if(strcmp($curriculum->name, $request->name)==0){
            if(strcmp($curriculum->acronym, $request->acronym)==0){
                if(strcmp($curriculum->description, $request->description)==0){
                    return redirect()->back()->with("error","No changes made.");
                }
            }
        }
        
        $data = request()->validate([
            'name' => ['string', 'max:50'],
            'acronym' => ['string'],
            'description' => []
        ]);
        //dd($data);


        $curriculum =\App\Models\Curriculum::find($id);
        $curriculum->update($data);
        
        return redirect()->back()->with("success","Changes saved successfully");
    }


    public function getSubjects(Request $request){
        $subjects = DB::table('subjects')
            ->where('grade_level', $request->grade_lvl)
            ->get();
        if (count($subjects) > 0) {
            return response()->json($subjects);
        }
    }
}
