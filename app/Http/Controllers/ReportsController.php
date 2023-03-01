<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Section;
use App\Models\Schoolyear;
use App\Models\StudentSchoolyear;
use App\Models\StudentRegister;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }

    public function index(){
        return view ('admin.reports.index');
    }

    public function sf1(){
        $currentSY = Schoolyear::where('isCurrent', true)->first();
        //dd($currentSY);

        $section_sy = DB::table('sections')
        ->crossJoin('schoolyears')
        ->orderBy('schoolyears.year_start', 'DESC')
        ->orderBy('sections.grade_level', 'ASC')
        ->select('schoolyears.id as sy', 'year_start', 'year_end', 'isCurrent',
            'sections.id as section', 'name','grade_level', 'adviser')
        ->get()->paginate(20);

        //dd($section_sy);
        return view('admin.reports.sf1.view', compact('section_sy'));
    }

    public function sf1_create(User $user, $studentsy){
        $this->authorize('create', $user);
        //dd($studentsy);

        $studSY = StudentSchoolyear::where('id', $studentsy)->first();
        //dd($studSY->StudentRegister);

        $studentReg = StudentRegister::where([
            'student_id' => $studSY->student_id,
            'schoolyear_id' => $studSY->schoolyear_id
        ])->first();
        //dd($studentReg);
        $schoolyears = DB::table('schoolyears')
            ->orderBy('year_start')
            ->get();
        $student_users = DB::table('users')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->where('users.owner_type', 'S')
            ->join('student_schoolyears', 'student_schoolyears.student_id', '=', 'students.id')
            ->join('sections', 'student_schoolyears.section_id', '=', 'sections.id')
            ->select('students.id as stud_id', 'students.LRN_no', 'students.curriculum_id', 'users.*', 'sections.name', 'sections.grade_level')
            ->orderBy('grade_level')
            ->orderBy('lastName', 'ASC')
            ->get();
        //dd($schoolyears);
        
        if(isset($studentReg)){
            return view('admin.reports.sf1.edit', compact('schoolyears', 'studSY', 'studentReg'));
        }else{
            return view('admin.reports.sf1.create', compact('schoolyears', 'studSY'));
        }
    }

    public function sf1_store(Request $request, User $user)
    {
        // Validation of input
        $data = request()->validate([
            'schoolyear' => ['required'],
            'grade_lvl' => ['required'],
            'section' => ['required'],
            'student' => ['required'],
            'age' => ['required'],
            'mother_tongue' => ['required', 'string'],
            'IP_ethnicGroup' => '',
            'father_givenName' => ['required', 'string'],
            'father_middleName' => '',
            'father_lastName' => ['required', 'string'],
            'mother_givenName' => ['required', 'string'],
            'mother_middleName' => '',
            'mother_lastName' => ['required', 'string'],
            'guardian_givenName' => '',
            'guardian_middleName' => '',
            'guardian_lastName' => '',
            'guardian_relationship' => '',
            'contact' => '',
            'remarks' => '',
        ]);        


        $new_sf1 = \App\Models\StudentRegister::create([
            'student_id' => $data['student'],
            'section_id' => $data['section'],
            'age' => $data['age'],
            'mother_tongue' => $data['mother_tongue'],
            'father_givenName' => $data['father_givenName'],
            'father_middleName' => $data['father_middleName'],
            'father_lastName' => $data['father_lastName'],
            'mother_givenName' => $data['mother_givenName'],
            'mother_middleName' => $data['mother_middleName'],
            'mother_lastName' => $data['mother_lastName'],
            'guardian_givenName' => $data['guardian_givenName'],
            'guardian_middleName' => $data['guardian_middleName'],
            'guardian_lastName' => $data['guardian_lastName'],
            'guardian_relationship' => $data['guardian_relationship'],
            'parent_guardian_contactNo' => $data['contact'],
            'remarks' => $data['remarks'],
            'schoolyear_id' => $data['schoolyear'],
        ]);

        return redirect()->back()->with("success","New SF1 Record Created!");
    }

    public function sf1_update(Request $request, User $user, $id)
    {
        $studentReg = StudentRegister::where('id', $id)->first();
        //dd($studentReg);
        // Validation of input
        $data = request()->validate([
            'schoolyear' => ['required'],
            'grade_lvl' => ['required'],
            'section' => ['required'],
            'student' => ['required'],
            'age' => ['required'],
            'mother_tongue' => ['required', 'string'],
            'IP_ethnicGroup' => '',
            'father_givenName' => ['required', 'string'],
            'father_middleName' => '',
            'father_lastName' => ['required', 'string'],
            'mother_givenName' => ['required', 'string'],
            'mother_middleName' => '',
            'mother_lastName' => ['required', 'string'],
            'guardian_givenName' => '',
            'guardian_middleName' => '',
            'guardian_lastName' => '',
            'guardian_relationship' => '',
            'contact' => '',
            'remarks' => '',
        ]);        

        $studentReg->student_id = $data['student'];
        $studentReg->section_id = $data['section'];
        $studentReg->age = $data['age'];
        $studentReg->mother_tongue = $data['mother_tongue'];
        $studentReg->father_givenName = $data['father_givenName'];
        $studentReg->father_middleName = $data['father_middleName'];
        $studentReg->father_lastName = $data['father_lastName'];
        $studentReg->mother_givenName = $data['mother_givenName'];
        $studentReg->mother_middleName = $data['mother_middleName'];
        $studentReg->mother_lastName = $data['mother_lastName'];
        $studentReg->guardian_givenName = $data['guardian_givenName'];
        $studentReg->guardian_middleName = $data['guardian_middleName'];
        $studentReg->guardian_lastName = $data['guardian_lastName'];
        $studentReg->guardian_relationship = $data['guardian_relationship'];
        $studentReg->parent_guardian_contactNo = $data['contact'];
        $studentReg->remarks = $data['remarks'];
        $studentReg->schoolyear_id = $data['schoolyear'];
        $studentReg->save();

        return redirect()->back()->with("success","Changes Saved Successfully!");
    }

    public function sf1_show(User $user, $sy, $section_id){
        $schoolyear = Schoolyear::where('id','=', $sy)->first();
        //dd($schoolyear);
        $section = Section::where('id','=', $section_id)->first();
        //dd($section);
        
        // $students = \App\Models\StudentSchoolyear::where([
        //     'section_id' => $section_id,
        //     'schoolyear_id' => $sy
        // ])->get();
        
        $students = DB::table('student_schoolyears')
        ->join('students', 'student_id', 'students.id')
        ->join('users', 'user_id', 'users.id')
        ->join('sections', 'section_id', 'sections.id')
            ->where('student_schoolyears.section_id', $section_id)
            ->where('student_schoolyears.schoolyear_id', $sy)
            ->select('student_schoolyears.id as studentsy', 'students.*', 'users.*', 'sections.*')
            ->get();
        //dd($students);

        //dd($section_sy);
        return view('admin.reports.sf1.show', compact('schoolyear','section','students'));
    }

    
    public function generate_sf1(User $user, $sy, $section_id){
        $schoolyear = Schoolyear::where('id','=', $sy)->first();
        //dd($schoolyear);
        $section = Section::where('id','=', $section_id)->first();

        $records = StudentRegister::where([
            'section_id' => $section_id,
            'schoolyear_id' => $sy
        ])->get();
        //dd($records);
        return view('sf_pdf.sf1', compact('schoolyear','section','records'));
    }


    public function sf2(){
        return view('sf_pdf.sf2');
    }

    public function sf4(){
        return view('sf_pdf.sf4');
    }
    
    public function sf6(){
        return view('admin.reports.sf6');
    }

    public function sf8(){
        return view('admin.reports.sf8');
    }

    public function sf8_create(){
        return view('admin.reports.sf8_create');
    }
    public function sf8_store(Request $request)
    {
        // validate the input data
        $validated = $request->validate([
            'age' => 'required|integer|min:1',
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:0.5|max:3',
        ]);

        // calculate BMI and BMI category
        $height_squared = $validated['height'] ** 2;
        $bmi = $validated['weight'] / $height_squared;

        if ($bmi < 16) {
            $bmi_category = "Severely Wasted";
        } else if ($bmi >= 16 && $bmi < 18.5) {
            $bmi_category = "Wasted";
        } else if ($bmi >= 18.5 && $bmi <= 24.9) {
            $bmi_category = "Normal";
        } else if ($bmi >= 25 && $bmi <= 29.9) {
            $bmi_category = "Overweight";
        } else {
            $bmi_category = "Obese";
        }

        // calculate height-for-age based on WHO guidelines for children 5-19 years old
        $age_in_months = $validated['age'] * 12;
        $z_score = $this->calculateHeightForAgeZScore($validated['height'], $validated['age'], 'male');
        if ($z_score < -3) {
            $height_for_age = "Severely Stunted";
        } else if ($z_score < -2) {
            $height_for_age = "Stunted";
        } else if ($z_score < 2) {
            $height_for_age = "Normal";
        } else {
            $height_for_age = "Tall";
        }

        // create and save the DepedForm instance to the database
        $form = new DepedForm;
        $form->age = $validated['age'];
        $form->weight = $validated['weight'];
        $form->height = $validated['height'];
        $form->height_squared = $height_squared;
        $form->bmi = $bmi;
        $form->bmi_category = $bmi_category;
        $form->height_for_age = $height_for_age;
        $form->remarks = $request->input('remarks', '');
        $form->save();

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    private function calculateHeightForAgeZScore($height, $age, $gender)
    {
        // calculate L, M, S parameters for WHO height-for-age tables
        $tables = json_decode(file_get_contents(storage_path('app/who_height_for_age.json')), true);
        $table = $tables[$gender];
        $months = $age * 12;

        $l = $table[$months]['l'];
        $m = $table[$months]['m'];
        $s = $table[$months]['s'];

        // calculate z-score using WHO formula
        $x = $height / $m;
        $z = ((($x ** $l) - 1) / ($l * $s));

        return $z;
    }

    public function getStudents(Request $request){
        $students = DB::table('student_schoolyears')
            ->where('section_id', $request->section)
            ->get();
        if (count($students) > 0) {
            return response()->json($students);
        }
    }
}
