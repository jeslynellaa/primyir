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
            ->get()->paginate(5);
        
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
            'accountStatus' => ['required'],
            'owner_type' => ['required'],
            'LRN_no' => ['digits:12', 'required', 'unique:students'],
            'section' => 'integer',
            'curriculum' => 'integer',
            'schoolyear_id' => 'integer',
            'religion' => 'string',
            'status' => 'string'
        ]);

        function randomPassword() {
            $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
            $pass = array(); //remember to declare $pass as an array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass); //turn the array into a string
        }

        $new_given = str_replace(' ', '', strtolower($data['givenName']));
        $new_middle = str_replace(' ', '', strtolower($data['middleName']));
        $new_last = str_replace(' ', '', strtolower($data['lastName']));
        //dd($new_given, $new_middle, $new_last);

        $username = $new_given.$new_middle.$new_last.str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
        //dd($username);
        $rand_password = randomPassword();
        //dd($rand_password);
        $newUser = \App\Models\User::create([
            'givenName' => $data['givenName'],
            'middleName' => $data['middleName'],
            'lastName' => $data['lastName'],
            'birthdate' => $data['birthdate'],
            'contactNum' => $data['contactNum'],
            'sex' => $data['sex'],
            'email' => $data['email'],
            'username' => $username,
            'password' => Hash::make($rand_password),
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

    public function edit(User $user, $id)
    {
        $this->authorize('create', $user);
        $curricula = DB::table('curricula')
            ->select('id', 'name')
            ->orderBy('name', 'ASC')
            ->get();
        
        $student = \App\Models\Student::find($id);
        //dd($curricula);
        return view('admin.students.edit', compact('curricula', 'student'));
    }

    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user);
        $regions = $this->getRegions();
        
        if(strcmp($user->email, $request->email) == 0){
            $data = request()->validate([
                'givenName' => '',
                'middleName' => '',
                'lastName' => '',
                'email' => '',
                'contactNum' => ['digits:11'],
                'birthdate' => ''
            ]);
            if(strcmp($user->contactNum, $request->contactNum) == 0){
                return redirect()->back()->with("error","No changes made.");
            }
        }
        else{ 
            $data = request()->validate([
                'givenName' => '',
                'middleName' => '',
                'lastName' => '',
                'email' => ['string', 'email', 'max:255', 'unique:users'],
                'contactNum' => ['digits:11'],
                'birthdate' => ''
            ]);
        }
        $user = Auth::user();
        $user->update($data);
        
        return redirect()->back()->with("success","Changes saved successfully!");
    }

    public function show(User $user, $stud_id)
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
        $address = DB::table('addresses')
            ->join('users', 'addresses.user_id', '=', 'users.id')
            ->join('barangays', 'addresses.barangay', '=', 'barangays.code', 'left outer')
            ->join('city_municipalities', 'addresses.city', '=', 'city_municipalities.code', 'left outer')
            ->join('provinces', 'addresses.province', '=', 'provinces.code', 'left outer')
            ->join('regions', 'addresses.region', '=', 'regions.code', 'left outer')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->where('students.id', $stud_id)
            ->select('barangays.name as brgy', 'city_municipalities.name as city', 'provinces.name as province', 'regions.name as region', 'addresses.street')
            ->first();
        //dd($address);
        $student_model = \App\Models\Student::find($stud_id);
        //dd($student_model);
        //dd($student_records);
        return view('admin.students.view', compact('student_records', 'address', 'student_model'));
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

        $assigned_subs = DB::table('student_subj_classes')
        ->where('student_subj_classes.student_id', $stud_id)
        ->join('subject_classes', 'subject_classes.id', '=', 'student_subj_classes.subject_class_id')
        ->join('subjects', 'subject_classes.subject_id', '=', 'subjects.id')
        ->select('subjects.name as subject', 'subject_classes.id as subclass_id')
        ->get();
        //dd($assigned_subs);

        $avail_subs = DB::table('subject_classes')
        ->join('subjects', 'subject_classes.subject_id', '=', 'subjects.id')
        ->join('sections', 'subject_classes.section_id', '=', 'sections.id')
        ->where('subjects.grade_level', $grade)
        ->where('subject_classes.section_id', $schoolyear->Section->id)
        ->whereNotIn('subject_classes.id',  DB::table('student_subj_classes')
                    ->where('student_subj_classes.student_id', $stud_id)
                    ->join('subject_classes', 'subject_classes.id', '=', 'student_subj_classes.subject_class_id')->pluck('subject_classes.id'))
        ->select('subjects.name as subject', 'subject_classes.id as subclass_id', 'sections.name as section')
        ->get();

        //dd($avail_subs);
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
            $newStudentSubjClass = \App\Models\StudentSubjClass::create([
                'student_id' => $data['student'],
                'student_schoolyear_id' => $data['student_sy'],
                'subject_class_id' => $value
            ]);
            \App\Models\StudentSubjGrade::create([
                'student_subj_class_id' => $newStudentSubjClass->id
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
}
