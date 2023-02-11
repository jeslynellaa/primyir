<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Address;
use App\Models\Student;
use App\Models\Section;
use App\Models\StudentSchoolyear;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $student_users = DB::table('users')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->where('users.owner_type', 'S')
            ->join('student_schoolyears', 'student_schoolyears.student_id', '=', 'students.id')
            ->join('sections', 'student_schoolyears.section_id', '=', 'sections.id')
            ->select('students.id as stud_id', 'students.LRN_no', 'students.curriculum_id', 'users.*', 'sections.name', 'sections.grade_level')
            ->orderBy('grade_level')
            ->orderBy('lastName', 'ASC')
            ->get();

        //dd($student_users);
        return view('admin.students.index', compact('student_users'));
    }

    public function create(User $user)
    {
        $this->authorize('create', $user);
        $curricula = DB::table('curricula')
            ->select('id', 'name')
            ->orderBy('name', 'ASC')
            ->get();
        
        //dd($curricula);
        return view('admin.students.create', compact('curricula'));
    }

    public function store(Request $request, User $user)
    {
        $this->authorize('create', $user);

        $data = request()->validate([
            'givenName' => ['required', 'string', 'max:255'],
            'middleName' => ['max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'birthdate' => ['required'],
            'contactNum' => ['digits:11'],
            'sex' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'accountStatus' => ['required'],
            'owner_type' => ['required'],
            'LRN_no' => ['digits:12', 'required', 'unique:students'],
            'section' => 'integer',
            'curriculum' => 'integer',
            'schoolyear_id' => 'integer',
            'religion' => 'string',
            'status' => 'string'
        ]);

        $newUser = \App\Models\User::create([
            'givenName' => $data['givenName'],
            'middleName' => $data['middleName'],
            'lastName' => $data['lastName'],
            'birthdate' => $data['birthdate'],
            'contactNum' => $data['contactNum'],
            'sex' => $data['sex'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'accountStatus' => $data['accountStatus'],
            'owner_type' => $data['owner_type']
        ]);

        $userid = $newUser->id;

        $newStudent = \App\Models\Student::create([
            'user_id' => $userid,
            'LRN_no' => $data['LRN_no'],
            'religion' => $data['religion'],
            'curriculum_id' => $data['curriculum']
        ]);

        $studentID = $newStudent->id;

        $newStudentSY = \App\Models\StudentSchoolyear::create([
            'student_id' => $studentID,
            'schoolyear_id' => $data['schoolyear_id'],
            'section_id' => $data['section'],
            'status' => $data['status']
        ]);
        
        return redirect()->back()->with("success","New Student Account Created Successfully!");
    }

    public function show($stud_id)
    {
        $student_records = DB::table('users')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->where('students.id', $stud_id)
            ->join('student_schoolyears', 'student_schoolyears.student_id', '=', 'students.id')
            ->join('sections', 'student_schoolyears.section_id', '=', 'sections.id')
            ->join('schoolyears', 'student_schoolyears.schoolyear_id', '=', 'schoolyears.id')
            ->select('students.id as stud_id', 'students.LRN_no', 'students.curriculum_id', 
                'users.givenName', 'users.middleName', 'users.lastName', 
                'sections.name', 'sections.grade_level',
                'student_schoolyears.status',
                'schoolyears.year_start', 'schoolyears.year_end')
            ->get();
        $student = DB::table('users')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->where('students.id', $stud_id)
            ->select('users.givenName', 'users.middleName', 'users.lastName', 'students.id as stud_id')
            ->first();
        //dd($student_records);
        return view('admin.students.view', compact('student_records', 'student'));
    }

    public function create_enrollment(User $user, $stud_id)
    {
        $this->authorize('create', $user);

        $schoolyears = DB::table('schoolyears')
            ->orderBy('year_start')
            ->get();
        //dd($schoolyears);

        $student = DB::table('users')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->where('students.id', $stud_id)
            ->select('users.givenName', 'users.middleName', 'users.lastName', 'students.LRN_no', 'students.id')
            ->first();

        return view('admin.students.enroll', compact('schoolyears', 'student'));
    }

    public function store_enrollment(Request $request, User $user)
    {
        $this->authorize('create', $user);

        $data = request()->validate([
            'student_id' => ['required','integer'],
            'schoolyear' => ['required','integer'],
            'section' => 'integer',
            'status' => 'string'
        ]);

        $newStudentSY = \App\Models\StudentSchoolyear::create([
            'student_id' => $data['student_id'],
            'schoolyear_id' => $data['schoolyear'],
            'section_id' => $data['section'],
            'status' => $data['status']
        ]);
        
        return redirect()->back()->with("success","New Student Enrollment Record Created Successfully!");
    }
    

    public function getSections(Request $request){
        $sections = DB::table('sections')
            ->where('grade_level', $request->grade_lvl)
            ->get();
        if (count($sections) > 0) {
            return response()->json($sections);
        }
    }
}
