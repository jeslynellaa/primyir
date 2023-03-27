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
use App\Models\StudentHealth;
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

// ===================== SF 1 FUNCTIONS ========================================
    public function sf1(User $user){
        $this->authorize('create', $user);
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
// ================================= END OF SF1 =====================================================
    public function generate_sf9(){
        return view('sf_pdf.sf9');
    }
    
    public function sf6(){
        return view('admin.reports.sf6');
    }
    
// ================================= SF5 FUNCTIONS =====================================================
public function sf5(){
    $currentSY = Schoolyear::where('isCurrent', true)->first();

    $section_sy = DB::table('sections')
    ->crossJoin('schoolyears')
    ->orderBy('schoolyears.year_start', 'DESC')
    ->orderBy('sections.grade_level', 'ASC')
    ->select('schoolyears.id as sy', 'year_start', 'year_end', 'isCurrent',
        'sections.id as section', 'name','grade_level', 'adviser')
    ->get()->paginate(20);

    return view('admin.reports.sf5.view', compact('section_sy'));
}

public function sf5_show(User $user, $sy, $section_id){
    $schoolyear = Schoolyear::where('id','=', $sy)->first();
    //dd($schoolyear);
    $section = Section::where('id','=', $section_id)->first();
    
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
    return view('admin.reports.sf5.show', compact('schoolyear','section','students'));
}

public function sf5_create(User $user, $studentsy){
    $this->authorize('create', $user);
    //dd($studentsy);

    $studSY = StudentSchoolyear::where('id', $studentsy)->first();
    //dd($studSY->StudentRegister);

    $studentHealth = StudentHealth::where([
        'student_id' => $studSY->student_id,
        'schoolyear_id' => $studSY->schoolyear_id
    ])->first();
    //dd($studentReg);
    $schoolyears = DB::table('schoolyears')
        ->orderBy('year_start')
        ->get();
    
    if(isset($studentHealth)){
        return view('admin.reports.sf5.edit', compact('schoolyears', 'studSY', 'studentHealth'));
    }else{
        return view('admin.reports.sf5.create', compact('schoolyears', 'studSY'));
    }
}

public function sf5_store(Request $request)
{
    // validate the input data
    $validated = $request->validate([
        'schoolyear' => ['required'],
        'grade_lvl' => ['required'],
        'section' => ['required'],
        'student' => ['required'],
        'age' => 'required|integer|min:1',
        'weight' => 'required|numeric|min:1',
        'height' => 'required|numeric|min:0.5|max:3',
    ]);
    //dd($request->all());

    $new_sf8 = \App\Models\StudentHealth::create([
        'student_id' => $validated['student'],
        'section_id' => $validated['section'],
        'age' => $validated['age'],
        'weight' => $validated['weight'],
        'height' => $validated['height'],
        'height2' => $height_squared,
        'bmi2' => $bmi,
        'bmi_category' =>$bmi_category,
        'hfa' => $height_for_age,
        'remarks' => $request->input('remarks', ''),
        'schoolyear_id' => $validated['schoolyear']
    ]);

    return redirect()->back()->with('success', 'SF8 Created Successfully!');
}

public function sf5_update(Request $request, User $user, $id)
{
    $studentHealth = StudentHealth::where('id', $id)->first();
    //dd($studentReg);
    // Validation of input
    $data = request()->validate([
        'schoolyear' => ['required'],
        'grade_lvl' => ['required'],
        'section' => ['required'],
        'student' => ['required'],
        'age' => 'required|integer|min:1',
        'weight' => 'required|numeric|min:1',
        'height' => 'required|numeric|min:0.5|max:3',
        'bmi2' => 'required|numeric',
        'height2' => 'required|numeric|min:0.5|max:3',
    ]);
    
    $studentHealth->student_id = $data['student'];
    $studentHealth->section_id = $data['section'];
    $studentHealth->age = $data['age'];
    $studentHealth->weight = $data['weight'];
    $studentHealth->height = $data['height'];
    $studentHealth->bmi2 = $data['bmi2'];
    $studentHealth->height2 = $data['height2'];
    $studentHealth->bmi_category = $bmi_category;
    $studentHealth->hfa = $height_for_age;
    $studentHealth->remarks = $request->input('remarks', '');
    $studentHealth->save();

    return redirect()->back()->with("success","Changes Saved Successfully!");
}
public function generate_sf5(User $user, $sy, $section_id){
    $schoolyear = Schoolyear::where('id','=', $sy)->first();
    //dd($schoolyear);
    $section = Section::where('id','=', $section_id)->first();

    $m_records = DB::table('student_healths')
    ->join('students', 'student_id', 'students.id')
    ->join('users', 'user_id', 'users.id')
    ->where('student_healths.section_id', $section_id)
    ->where('student_healths.schoolyear_id', $sy)
    ->where('users.sex', 'M')->get();
    //dd($m_records);
    $f_records = DB::table('student_healths')
    ->join('students', 'student_id', 'students.id')
    ->join('users', 'user_id', 'users.id')
    ->where('student_healths.section_id', $section_id)
    ->where('student_healths.schoolyear_id', $sy)
    ->where('users.sex', 'F')->get();
    //dd($f_records);
    return view('sf_pdf.sf5', compact('schoolyear','section','m_records', 'f_records'));
}

// ================================= END OF SF5 =====================================================

// ================================= SF8 FUNCTIONS =====================================================
    public function sf8(){
        $currentSY = Schoolyear::where('isCurrent', true)->first();

        $section_sy = DB::table('sections')
        ->crossJoin('schoolyears')
        ->orderBy('schoolyears.year_start', 'DESC')
        ->orderBy('sections.grade_level', 'ASC')
        ->select('schoolyears.id as sy', 'year_start', 'year_end', 'isCurrent',
            'sections.id as section', 'name','grade_level', 'adviser')
        ->get()->paginate(20);

        return view('admin.reports.sf8.view', compact('section_sy'));
    }

    public function sf8_show(User $user, $sy, $section_id){
        $schoolyear = Schoolyear::where('id','=', $sy)->first();
        //dd($schoolyear);
        $section = Section::where('id','=', $section_id)->first();
        
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
        return view('admin.reports.sf8.show', compact('schoolyear','section','students'));
    }

    public function sf8_create(User $user, $studentsy){
        $this->authorize('create', $user);
        //dd($studentsy);

        $studSY = StudentSchoolyear::where('id', $studentsy)->first();
        //dd($studSY->StudentRegister);

        $studentHealth = StudentHealth::where([
            'student_id' => $studSY->student_id,
            'schoolyear_id' => $studSY->schoolyear_id
        ])->first();
        //dd($studentReg);
        $schoolyears = DB::table('schoolyears')
            ->orderBy('year_start')
            ->get();
        
        if(isset($studentHealth)){
            return view('admin.reports.sf8.edit', compact('schoolyears', 'studSY', 'studentHealth'));
        }else{
            return view('admin.reports.sf8.create', compact('schoolyears', 'studSY'));
        }
    }

    public function sf8_store(Request $request)
    {
        // validate the input data
        $validated = $request->validate([
            'schoolyear' => ['required'],
            'grade_lvl' => ['required'],
            'section' => ['required'],
            'student' => ['required'],
            'age' => 'required|integer|min:1',
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:0.5|max:3',
        ]);
        //dd($request->all());

        $age = $request->age;
        $weight = $request->weight;
        $height = $request->height;
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

        // calculate height-for-age based on WHO guidelines for children 5-19 years old// Data source: https://www.who.int/growthref/en/
        if ($validated['age'] >= 5 && $validated['age'] <= 19) {
            if ($validated['height'] < 1.00) {
                $height_for_age = "Severely Stunted";
            } else if ($validated['height'] >= 1.00 && $validated['height'] <= 1.15) {
                $height_for_age = "Stunted";
            } else if ($validated['height'] > 1.15 && $validated['height'] <= 1.30) {
                $height_for_age = "Mildly Stunted";
            } else if ($validated['height'] > 1.30 && $validated['height'] <= 1.45) {
                $height_for_age = "Normal";
            } else if ($validated['height'] > 1.45 && $validated['height'] <= 1.60) {
                $height_for_age = "Mildly Tall";
            } else if ($validated['height'] > 1.60 && $validated['height'] <= 1.75) {
                $height_for_age = "Tall";
            } else if ($validated['height'] > 1.75) {
                $height_for_age = "Very Tall";
            }
        }

        $new_sf8 = \App\Models\StudentHealth::create([
            'student_id' => $validated['student'],
            'section_id' => $validated['section'],
            'age' => $validated['age'],
            'weight' => $validated['weight'],
            'height' => $validated['height'],
            'height2' => $height_squared,
            'bmi2' => $bmi,
            'bmi_category' =>$bmi_category,
            'hfa' => $height_for_age,
            'remarks' => $request->input('remarks', ''),
            'schoolyear_id' => $validated['schoolyear']
        ]);

        return redirect()->back()->with('success', 'SF8 Created Successfully!');
    }

    public function sf8_update(Request $request, User $user, $id)
    {
        $studentHealth = StudentHealth::where('id', $id)->first();
        //dd($studentReg);
        // Validation of input
        $data = request()->validate([
            'schoolyear' => ['required'],
            'grade_lvl' => ['required'],
            'section' => ['required'],
            'student' => ['required'],
            'age' => 'required|integer|min:1',
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:0.5|max:3',
            'bmi2' => 'required|numeric',
            'height2' => 'required|numeric|min:0.5|max:3',
        ]);
        
        // calculate BMI and BMI category
        $height_squared = $data['height'] ** 2;
        $bmi = $data['weight'] / $height_squared;
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

        // calculate height-for-age based on WHO guidelines for children 5-19 years old// Data source: https://www.who.int/growthref/en/
        if ($data['age'] >= 5 && $data['age'] <= 19) {
            if ($data['height'] < 1.00) {
                $height_for_age = "Severely Stunted";
            } else if ($data['height'] >= 1.00 && $data['height'] <= 1.15) {
                $height_for_age = "Stunted";
            } else if ($data['height'] > 1.15 && $data['height'] <= 1.30) {
                $height_for_age = "Mildly Stunted";
            } else if ($data['height'] > 1.30 && $data['height'] <= 1.45) {
                $height_for_age = "Normal";
            } else if ($data['height'] > 1.45 && $data['height'] <= 1.60) {
                $height_for_age = "Mildly Tall";
            } else if ($data['height'] > 1.60 && $data['height'] <= 1.75) {
                $height_for_age = "Tall";
            } else if ($data['height'] > 1.75) {
                $height_for_age = "Very Tall";
            }
        }        

        $studentHealth->student_id = $data['student'];
        $studentHealth->section_id = $data['section'];
        $studentHealth->age = $data['age'];
        $studentHealth->weight = $data['weight'];
        $studentHealth->height = $data['height'];
        $studentHealth->bmi2 = $data['bmi2'];
        $studentHealth->height2 = $data['height2'];
        $studentHealth->bmi_category = $bmi_category;
        $studentHealth->hfa = $height_for_age;
        $studentHealth->remarks = $request->input('remarks', '');
        $studentHealth->save();

        return redirect()->back()->with("success","Changes Saved Successfully!");
    }
    public function generate_sf8(User $user, $sy, $section_id){
        $schoolyear = Schoolyear::where('id','=', $sy)->first();
        //dd($schoolyear);
        $section = Section::where('id','=', $section_id)->first();

        $m_records = DB::table('student_healths')
        ->join('students', 'student_id', 'students.id')
        ->join('users', 'user_id', 'users.id')
        ->where('student_healths.section_id', $section_id)
        ->where('student_healths.schoolyear_id', $sy)
        ->where('users.sex', 'M')->get();
        //dd($m_records);
        $f_records = DB::table('student_healths')
        ->join('students', 'student_id', 'students.id')
        ->join('users', 'user_id', 'users.id')
        ->where('student_healths.section_id', $section_id)
        ->where('student_healths.schoolyear_id', $sy)
        ->where('users.sex', 'F')->get();
        //dd($f_records);
        return view('sf_pdf.sf8', compact('schoolyear','section','m_records', 'f_records'));
    }
    
// ================================= END OF SF8 =====================================================

    public function getStudents(Request $request){
        $students = DB::table('student_schoolyears')
            ->where('section_id', $request->section)
            ->get();
        if (count($students) > 0) {
            return response()->json($students);
        }
    }
}