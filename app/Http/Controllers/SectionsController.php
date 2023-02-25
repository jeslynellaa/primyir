<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Section;
use App\Models\Teacher;
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
        // Joining sections, teachers, and users into section_teachers for displaying in sections table
        $section_teachers = DB::table('sections')
            ->join('teachers', 'teachers.id', '=', 'adviser', 'left outer')
            ->join('users', 'users.id', '=', 'teachers.user_id', 'left outer')
            ->select('sections.grade_level', 'sections.name', 'sections.adviser', 'users.givenName', 'users.lastName')
            ->orderBy('grade_level')
            ->get()->paginate(10);

        return view('admin.sections.index', compact('section_teachers'));
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

        return view('admin.sections.create', compact('teachers'));
    }

    public function store(Request $request, User $user)
    {
        // Validation of input
        $data = request()->validate([
            'name' => ['required', 'string', 'max:50', 'unique:sections'],
            'grade_level' => ['required'],
            'adviser' => ''
        ]);        

        // Creating new section model
        if(isset($request->adviser)){
            $new_section = \App\Models\Section::create([
                'name' => $data['name'],
                'grade_level' => $data['grade_level'],
                'adviser' => $data['adviser']
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
                'grade_level' => $data['grade_level']
            ]);
            //dd($new_section);
        }


        return redirect()->back()->with("success","New Section Created!");
    }
}
