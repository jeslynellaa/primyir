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
use App\Models\StudentSubjClass;
use App\Models\StudentSubjGrade;
use Illuminate\Validation\Rule;
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
            ->select('students.id as stud_id', 'students.LRN_no', 'students.curriculum_id', 'users.*')
            ->orderBy('lastName', 'ASC')
            ->get()->paginate(2);
        
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
                'student_schoolyears.status', 'student_schoolyears.id as syid',
                'schoolyears.year_start', 'schoolyears.year_end')
            ->orderBy('year_start')
            ->get();
        $student = DB::table('users')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->where('students.id', $stud_id)
            ->select('users.givenName', 'users.middleName', 'users.lastName', 'students.id as stud_id')
            ->first();
        $student_model = \App\Models\Student::find($stud_id);
        //dd($student_model);
        //dd($student_records);
        return view('admin.students.view', compact('student_records', 'student', 'student_model'));
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
    
    public function enroll_show($stud_id, $syid)
    {
        //dd($syid);
        $schoolyear = \App\Models\StudentSchoolyear::find($syid);
        $student_model = \App\Models\Student::find($stud_id);

        $student_records = DB::table('students')
        ->join('student_schoolyears', 'students.id', '=', 'student_schoolyears.student_id')
        ->where('student_schoolyears.schoolyear_id', $syid)
        ->join('student_subj_classes', 'student_schoolyears.id', '=', 'student_subj_classes.student_schoolyear_id')
        ->join('student_subj_grades', 'student_subj_classes.id', '=', 'student_subj_grades.student_subj_class_id')
        ->get();
        return view('admin.students.view-record', compact('student_model', 'schoolyear', 'student_records'));
    }

    public function enroll_add($stud_id, $syid)
    {
        $schoolyear = \App\Models\StudentSchoolyear::find($syid);
        $student_model = \App\Models\Student::find($stud_id);

        $grade = $schoolyear->Section->grade_level;
        $section = $schoolyear->Section->name;

        $student_records = DB::table('students')
        ->join('student_schoolyears', 'students.id', '=', 'student_schoolyears.student_id')
        ->where('student_schoolyears.schoolyear_id', $syid)
        ->join('student_subj_classes', 'student_schoolyears.id', '=', 'student_subj_classes.student_schoolyear_id')
        ->join('student_subj_grades', 'student_subj_classes.id', '=', 'student_subj_grades.student_subj_class_id')
        ->get();

        $assigned_subs = DB::table('subjects')
        ->join('subject_classes', 'subjects.id', '=', 'subject_classes.subject_id')
        ->join('student_subj_classes', 'student_subj_classes.subject_class_id', '=', 'subject_classes.id')
        ->select('subjects.name as subject', 'subject_classes.id as subclass_id')
        ->get();

        $avail_subs = DB::table('subjects')
        ->join('subject_classes', 'subjects.id', '=', 'subject_classes.subject_id')
        ->join('student_subj_classes', 'student_subj_classes.subject_class_id', '=', 'subject_classes.id', 'left outer')
        ->where('subjects.grade_level', $grade)
        ->select('subjects.grade_level','student_id as student', 'subjects.name as subject', 'subject_classes.id as subclass_id')
        ->whereNull('student_id')
        ->get();
        //dd($avail_subs);

        // $subjects = DB::table('subjects')
        // ->join('subject_classes', 'subjects.id', '=', 'subject_classes.subject_id')
        // ->join('sections', 'sections.id', '=', 'subject_classes.section_id')
        // ->where('sections.grade_level', $grade)
        // ->select('subjects.name as subject', 'subject_classes.id as subclass_id')
        // ->get();

        //dd($subjects);
        return view('admin.students.add-subject', compact('student_model', 'grade','section','schoolyear', 'student_records', 'assigned_subs','avail_subs'));
    }

    public function enroll_store(Request $request, User $user, $stud_id, $syid)
    {
        $this->authorize('create', $user);

        $data = request()->validate([
            'student' => ['required','integer'],
            'student_sy' => ['required','integer'],
            'subjects' => 'required'
        ]);
        //dd($request->all());
        foreach ($request->subjects as $key => $value) {
            \App\Models\StudentSubjClass::create([
                'student_id' => $data['student'],
                'student_schoolyear_id' => $data['student_sy'],
                'subject_class_id' => $value
            ]);
        }
            // $newStudentSubClass = \App\Models\StudentSubjClass::create([
            //     'student_id' => $data['student'],
            //     'subject_class_id' => $data['subjects[$key]'],
            //     'student_schoolyear_id' => $data['student_sy'],
            // ]);
        
        // 

        // $newStudentSY = \App\Models\StudentSchoolyear::create([
        //     'student_id' => $data['student_id'],
        //     'schoolyear_id' => $data['schoolyear'],
        //     'section_id' => $data['section'],
        //     'status' => $data['status']
        // ]);
        return redirect()->back()->with("success","Subjects Added Successfully!");
    }

    public function getSections(Request $request){
        $sections = DB::table('sections')
            ->where('grade_level', $request->grade_lvl)
            ->get();
        if (count($sections) > 0) {
            return response()->json($sections);
        }
    }

    public function getStudents(Request $request){
        $students = DB::table('student_schoolyears')
            ->join('students', 'student_schoolyears.student_id', '=', 'students.id')
            ->join('users', 'students.user_id', '=', 'users.id')
            ->where('student_schoolyears.section_id', $request->section)
            ->get();
        if (count($students) > 0) {
            return response()->json($students);
        }
    }

    public function viewGrades(){
    return view('student.gradeProfile.index');
    }
}
