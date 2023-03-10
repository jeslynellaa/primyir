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
use App\Models\Schoolyear;
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
use App\Mail\TemporaryCredentials;


class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $currentSY = Schoolyear::where('isCurrent', true)->first();
        // dd($currentSY);
        
        $student_users = DB::table('users')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->where('users.owner_type', 'S')
            ->select('students.id as stud_id', 'students.LRN_no', 'students.curriculum_id', 'users.*')
            ->orderBy('lastName', 'ASC')
            ->get()->paginate(10);
        
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
        $schoolyears = DB::table('schoolyears')
            ->orderBy('year_start', 'DESC')
            ->get();
        $currentSY = Schoolyear::where('isCurrent', true)->first();
        //dd($currentSY);
        //dd($curricula);
        return view('admin.students.create', compact('curricula', 'schoolyears', 'currentSY'));
    }

    

    public function store(Request $request, User $user)
    {
        dd($request->all());
        $this->authorize('create', $user);
        //dd($request->all());

        $data = request()->validate([
            'givenName' => ['required', 'string', 'max:255'],
            'middleName' => ['max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'birthdate' => ['required'],
            //'contactNum' => ['digits:11'],
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

        if(is_null($request->input('contactNum'))){
            $data2 = request()->validate([
                'contactNum' => ''
            ]);
        }else{
            $data2 = request()->validate([
                'contactNum' => ['digits:11']
            ]);
            
        }

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

        if(isset($request->contactNum)){
            $newUser = \App\Models\User::create([
                'givenName' => $data['givenName'],
                'middleName' => $data['middleName'],
                'lastName' => $data['lastName'],
                'birthdate' => $data['birthdate'],
                'contactNum' => $data2['contactNum'],
                'sex' => $data['sex'],
                'email' => $data['email'],
                'username' => $username,
                'password' => Hash::make($rand_password),
                'accountStatus' => $data['accountStatus'],
                'owner_type' => $data['owner_type']
            ]);
        }else{
            $newUser = \App\Models\User::create([
                'givenName' => $data['givenName'],
                'middleName' => $data['middleName'],
                'lastName' => $data['lastName'],
                'birthdate' => $data['birthdate'],
                'sex' => $data['sex'],
                'email' => $data['email'],
                'username' => $username,
                'password' => Hash::make($rand_password),
                'accountStatus' => $data['accountStatus'],
                'owner_type' => $data['owner_type']
            ]);
        }

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
          // $mail->SMTPDebug = 3;                      //Enable verbose debug output
          $mail->isSMTP();                                            //Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->Username   = 'sorsogonnationalhs.deped@gmail.com';                     //SMTP username
          $mail->Password   = 'gjmocqrhdbbtmzjx';                               //SMTP password
          $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
          $mail->Port       = 587;                              //TCP port to connect to; use 587 if you have set
          $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );

          //Recipients
          $mail->setFrom('sorsogonnationalhs.deped@gmail.com', "e-SKWELAHAN");
          $mail->addAddress($newUser->email);     //Add a recipient
         //Content
          $mail->isHTML(true);                                  //Set email format to HTML
          $mail->Subject = "User's Portal Log-in Credentials";
          $mail->Body    = '<b>Pagbati, ' . $newUser->givenName . '</b>:<br><br>' 
          . 'You may now access the Primyir Portal by going to https://primyir-eskwelahan.online/ and entering the following credentials: ' .  '<br>' . '<ul>' 
          . '<li><b>Username:</b> ' . $username . '</li>' . '<li><b>Email:</b> ' . $newUser->email . '</li>' . '<li><b>Temporary password:</b> ' . $rand_password . '</li>' .'</ul>'
          . 'Be sure to immediately change your password after signing in. If you are having trouble signing in with your account, please visit the administration office. Thank you and God bless!' . '<br><br>'
          . 'Sama-sama nating iangat ang Edukalidad na Edukasyon.';

           $mail->send();
               echo "Message has been sent";
           } catch (Exception $e) {
               echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
           }
            //    Mail::to($newUser->email)->send(new TemporaryCredentials($username, $rand_password, $newUser->givenName));

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
        $this->authorize('create', $user);

        $student = \App\Models\Student::find($id);
        //dd($request->all());
        // $birthyear = date("Y", strtotime($request->input('birthdate')));
        // dd($birthyear);

        if((strcmp($student->user->email, $request->email) == 0) && (strcmp($student->user->username, $request->username) == 0)){
            $user_data = request()->validate([
                'givenName' => ['string', 'max:255'],
                'middleName' => ['max:255'],
                'lastName' => ['string', 'max:255'],
                'birthdate' => [''],
                'contactNum' => ['nullable', 'digits:11'],
                'sex' => ['required'],
                'email' => '',
                'username' => '',
                'accountStatus' => ['required']
            ]);
        }else if(strcmp($student->user->email, $request->email) == 0){
            $user_data = request()->validate([
                'givenName' => ['string', 'max:255'],
                'middleName' => ['max:255'],
                'lastName' => ['string', 'max:255'],
                'birthdate' => [''],
                'contactNum' => ['nullable', 'digits:11'],
                'sex' => ['required'],
                'email' => '',
                'username' => ['max:255', 'unique:users'],
                'accountStatus' => ['required']
            ]);
        }else if(strcmp($student->user->username, $request->username) == 0){
            $user_data = request()->validate([
                'givenName' => ['string', 'max:255'],
                'middleName' => ['max:255'],
                'lastName' => ['string', 'max:255'],
                'birthdate' => [''],
                'contactNum' => ['nullable', 'digits:11'],
                'sex' => ['required'],
                'email' => ['string', 'email', 'max:255', 'unique:users'],
                'username' => '',
                'accountStatus' => ['required']
            ]);
        }else{
            $user_data = request()->validate([
            'givenName' => ['string', 'max:255'],
            'middleName' => ['max:255'],
            'lastName' => ['string', 'max:255'],
            'birthdate' => [''],
            'contactNum' => ['nullable', 'digits:11'],
            'sex' => ['required'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'username' => ['max:255', 'unique:users'],
                'accountStatus' => ['required']
        ]);
    }

        if(strcmp($student->LRN_no, $request->LRN_no) == 0){
            $student_data = request()->validate([
                'LRN_no' => '',
                'religion' => 'string'
        ]);
        }else{
            $student_data = request()->validate([
                'LRN_no' => ['digits:12', 'required', 'unique:students'],
                'religion' => 'string'
        ]);
        }
        //$userid = $id;
        //$student = Auth::user();
        $student->user->update($user_data);
        $student->update($student_data);
        
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
            ->join('subject_classes', 'student_subj_classes.subject_class_id', 'subject_classes.id')
            ->join('subjects', 'subject_classes.subject_id', 'subjects.id')
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
        ->join('sections', 'sections.id', '=', 'subject_classes.section_id')
        ->select('student_subj_classes.id as stud_subj_id','subjects.name as subject', 'subject_classes.id as subclass_id', 'sections.name', 'sections.grade_level')
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
        return redirect()->back()->with("success","Subjects Added Successfully!");
    }

    public function destroy(User $user, Request $request) {
        //dd($request->all());
        foreach ($request->assigned as $key => $value) {
            $student_subj_class = StudentSubjClass::find($value);
            $student_subj_grade = $student_subj_class->StudentSubjGrade;
            $student_subj_grade->delete();
            $student_subj_class->delete();
        }
        // echo "Record deleted successfully.<br/>";
        // echo '<a href = "/delete-records">Click Here</a> to go back.';
        return redirect()->back()->with("success","Successfully unenrolled in selected subjects");
    }

    public function enroll_edit($id){

    $studentSY = StudentSchoolyear::find($id);

    $sections = Section::all();
    $schoolyears = Schoolyear::all();
    $grade= $studentSY->section->grade_level;
    if($studentSY){
        return response()->json([
            'status' =>200,
            'studentSY' => $studentSY,
            'sections' => $sections,
            'schoolyears' => $schoolyears,
            'grade' => $grade
        ]);
    }else{
        return response()->json([
            'status' =>404,
            'message' =>"Subject Class Not Found",
        ]);
    }
}

public function enroll_update(Request $request, $id){

    //dd($request);
    
    $validator = Validator::make($request->all(), [
        'section_id' => '',
        'schoolyear_id' =>'',
        'status' =>'string',
    ]);

    if($validator->fails())
    {
        return response()->json([
            'status' => 400,
            'errors' => $validator->messages(),
        ]);
    }else{
        $studentSY =\App\Models\StudentSchoolyear::find($id);
        if($studentSY){
            $studentSY->section_id = $request->input('section_id');
            $studentSY->schoolyear_id = $request->input('schoolyear_id');
            $studentSY->status = $request->input('status');
            $studentSY->update();

            return response()->json([
                'status' =>200,
                'message' => "Changes Saved Successfully!"
            ]);
        }else{
            return response()->json([
                'status' =>404,
                'message' =>"Student Enrollment Record Not Found",
            ]);
        }
    }
    //return redirect()->back()->with("success","Changes saved successfully");
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
