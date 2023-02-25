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
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


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
        $new_given = strtolower(substr($data['givenName'], 0, 4));
        $new_middle = strtolower(substr($data['middleName'], 0, 2));
        $new_last = strtolower($data['lastName']);
        //dd($new_given, $new_middle, $new_last);

        $username = trim($new_given).trim($new_middle).trim($new_last).str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
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
        
        $mail = new PHPMailer(true);
        try {
           //Server settings
           //$mail->SMTPDebug = 0;                      //Enable verbose debug output
           $mail->isSMTP();                                            //Send using SMTP
           $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
           $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
           $mail->Username   = 'sorsgonnationalhs.deped@gmail.com';                     //SMTP username
           $mail->Password   = 'svptpowspubtxryv';                               //SMTP password
           $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
           $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set

           //Recipients
            $mail->setFrom('sorsgonnationalhs.deped@gmail.com', "e-SKWELAHAN");
           $mail->addAddress($newUser->email);     //Add a recipient
           //Content
           $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Username and Temporary Password for your Account';
            $mail->Body    = 'Good Day ' . $newUser->givenName . ',<br><br>' 
            . 'Your temporary credentials are: ' .  '<br>' . '<ul>' 
            . '<li>Your username: ' . $username . '</li>' . '<li>Your temporary password is: ' . $rand_password . '</li>' .'</ul>'
            . 'Please use these credentials to log in to your account. We recommend that you change your password immediately after logging in.' . '<br><br>'
            . 'Thank you,' . '<br><br>'
            . 'e-SKWELAHAN Admin';

            $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
//            Mail::to($request->email)->send(new TemporaryCredentials($username, $rand_password, $user->givenName));

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

    public function update(Request $request, User $user, $id)
    {
        $this->authorize('update', $user);

        $data = request()->validate([
            'givenName' => ['string', 'max:255'],
            'middleName' => ['max:255'],
            'lastName' => ['string', 'max:255'],
            'birthdate' => [''],
            'contactNum' => ['nullable', 'digits:11'],
            'sex' => ['required'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'username' => ['max:255', 'unique:users'],
            'accountStatus' => ['required'],
            'owner_type' => ['required'],
            'LRN_no' => ['digits:12', 'unique:students'],
            'religion' => 'string',
            'status' => 'string'
        ]);

        $userid = $id;

        $student = \App\Models\Student::find($id);
        $student->update([
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
        
        $student = Auth::user();
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

        // $student_records = DB::table('students')
        // ->join('student_schoolyears', 'students.id', '=', 'student_schoolyears.student_id')
        // ->where('student_schoolyears.schoolyear_id', $syid)
        // ->join('student_subj_classes', 'student_schoolyears.id', '=', 'student_subj_classes.student_schoolyear_id')
        // ->join('student_subj_grades', 'student_subj_classes.id', '=', 'student_subj_grades.student_subj_class_id')
        // ->get();

        $grades = Student::join('student_subj_classes','students.id','student_subj_classes.student_id')
                            ->join('student_subj_grades', 'student_subj_classes.id', 'student_subj_grades.student_subj_class_id')
                            ->where('student_subj_classes.student_schoolyear_id', $syid)
                            // ->where('id', $stud_id)
                            ->get();
        // dd($grades);
        return view('admin.students.view-record', compact('student_model', 'schoolyear', 'grades'));
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

    public function viewGrades(){
    return view('student.gradeProfile.index');
    }


}
