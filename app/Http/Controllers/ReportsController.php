<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Section;
use App\Models\Student;
use App\Models\StudentData;
use App\Models\StudentSubjClass;
use App\Models\StudentSubjGrade;
use App\Models\Schoolyear;
use App\Models\PromotionCandidate;
use App\Models\StudentSchoolyear;
use App\Models\StudentRegister;
use App\Models\StudentHealth;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ReportsController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }

    public function index(){
        return view ('admin.reports.index');
    }
    
    public function faculty_index(User $user){
        $teacher = Auth::user()->Teacher;
        $advisory = $teacher->Section;
        //dd($advisory);
        $currentSY = Schoolyear::where('isCurrent', true)->first();

        return view ('faculty.reports.index', compact('advisory', 'currentSY'));
    }

// ===================== SF 1 FUNCTIONS ========================================
    public function sf1(User $user){
        Gate::authorize('access-forms', $user);

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
        Gate::authorize('access-forms', $user);
        //dd($studentsy);

        if (Auth::user()->owner_type == 'A'){
            $roleName = 'admin';
        }
        else if (Auth::user()->owner_type == 'T'){
            $roleName = 'faculty';
        }

        $studSY = StudentSchoolyear::where('id', $studentsy)->first();
        $sy = Schoolyear::where('id', $studSY->schoolyear_id)->first();
        
        // ======= Calculating age ==========
        $student_bday = $studSY->Student->User->birthdate;      //getting birthdate of student
        
        $date = $sy->year_start.'-06-00 next friday';           //getting date string
        $first_friday = date('Y-m-d', strtotime($date));        //getting actual date of first friday of june
        $age = date_diff(date_create($first_friday), date_create($student_bday))->y;    //calculating age
        //===================================

        $studentReg = StudentRegister::where([
            'student_id' => $studSY->student_id,
            'schoolyear_id' => $studSY->schoolyear_id
        ])->first();
        $studentData = StudentData::where('student_id', $studSY->student_id)->get();
        //dd($studentReg->StudentData);
        $schoolyears = DB::table('schoolyears')
            ->orderBy('year_start')
            ->get();
        //dd($schoolyears);
        
        if(isset($studentReg)){
            return view('admin.reports.sf1.edit', compact('roleName', 'schoolyears', 'studSY', 'studentReg', 'studentData'));
        }else{
            return view('admin.reports.sf1.create', compact('roleName', 'schoolyears', 'studSY', 'age', 'studentData'));
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

        $new_studentData = \App\Models\StudentData::create([
            'student_id' => $data['student'],
            'mother_tongue' => $data['mother_tongue'],
            'IP_ethnicGroup' => $data['IP_ethnicGroup'],
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
            'parent_guardian_contactNo' => $data['contact']
        ]);

        $new_sf1 = \App\Models\StudentRegister::create([
            'student_id' => $data['student'],
            'section_id' => $data['section'],
            'age' => $data['age'],
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
        Gate::authorize('access-forms', $user);
        
        $schoolyear = Schoolyear::where('id','=', $sy)->first();
        //dd($schoolyear);
        $section = Section::where('id','=', $section_id)->first();
        //dd($section);
        
        if(Route::is('admin.reports.sf1_show')){
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

        if(Route::is('faculty.reports.sf1_show')){
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
            return view('faculty.reports.sf1.show', compact('schoolyear','section','students'));
        }
    }

    
    public function generate_sf1(User $user, $sy, $section_id){
        Gate::authorize('access-forms', $user);
        
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
    ->join('promotion_candidates', 'promotion_candidates.student_id', 'students.id', 'left outer')
        ->where('student_schoolyears.section_id', $section_id)
        ->where('student_schoolyears.schoolyear_id', $sy)
        ->select('student_schoolyears.id as studentsy', 'students.*', 'users.*', 'sections.*', 'promotion_candidates.*')
        ->get();
    //dd($students);
    $studentSY = StudentSchoolyear::where([
        'section_id' => $section_id,
        'schoolyear_id' => $sy
    ])->get();

    //dd($studentSY);
    return view('admin.reports.sf5.show', compact('schoolyear','section','studentSY'));
}

public function sf5_create(User $user, $studentsy){
    $this->authorize('create', $user);
    //dd($studentsy);

    $studSY = StudentSchoolyear::where('id', $studentsy)->first();
    //dd($studSY->StudentRegister);
    $grades = Student::join('student_subj_classes','students.id','student_subj_classes.student_id')
    ->join('student_subj_grades', 'student_subj_classes.id', 'student_subj_grades.student_subj_class_id')
    ->join('subject_classes', 'student_subj_classes.subject_class_id', 'subject_classes.id')
    ->join('subjects', 'subject_classes.subject_id', 'subjects.id')
    ->where('student_subj_classes.student_schoolyear_id', $studentsy)
    ->sum('gen_ave');
    $count = Student::join('student_subj_classes','students.id','student_subj_classes.student_id')
    ->join('student_subj_grades', 'student_subj_classes.id', 'student_subj_grades.student_subj_class_id')
    ->join('subject_classes', 'student_subj_classes.subject_class_id', 'subject_classes.id')
    ->join('subjects', 'subject_classes.subject_id', 'subjects.id')
    ->where('student_subj_classes.student_schoolyear_id', $studentsy)
    ->count();
    // dd($count);
    // dd($grades);
    if($count>0){
        $final_average = $grades/$count;
    }
    //dd($final_average);
    $candidate = PromotionCandidate::where([
        'student_id' => $studSY->student_id,
        'schoolyear_id' => $studSY->schoolyear_id
    ])->first();
    //dd($studentReg);
    $schoolyears = DB::table('schoolyears')
        ->orderBy('year_start')
        ->get();
    
    if(isset($candidate)){
        return view('admin.reports.sf5.edit', compact('schoolyears', 'studSY', 'candidate'));
    }else{
        return view('admin.reports.sf5.create', compact('schoolyears', 'studSY', 'final_average'));
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
        'gen_average' => 'required|integer|min:60',
        'action_taken' => 'required|string',
        'failed_areas' => '',
    ]);
    //dd($request->all());

    $new_sf5 = \App\Models\PromotionCandidate::create([
        'student_id' => $validated['student'],
        'section_id' => $validated['section'],
        'gen_average' => $validated['gen_average'],
        'action_taken' => $validated['action_taken'],
        'failed_areas' => $validated['failed_areas'],
        'schoolyear_id' => $validated['schoolyear']
    ]);

    return redirect()->back()->with('success', 'SF5 Created Successfully!');
}

public function sf5_update(Request $request, User $user, $id)
{
    $promotion_candidate = PromotionCandidate::where('id', $id)->first();
    //dd($studentReg);
    // Validation of input
    $data = request()->validate([
        'schoolyear' => ['required'],
        'grade_lvl' => ['required'],
        'section' => ['required'],
        'student' => ['required'],
        'gen_average' => 'required|integer|min:60',
        'action_taken' => 'required|string',
        'failed_areas' => '',
    ]);
    
    $promotion_candidate->student_id = $data['student'];
    $promotion_candidate->section_id = $data['section'];
    $promotion_candidate->gen_average = $data['gen_average'];
    $promotion_candidate->action_taken = $data['action_taken'];
    $promotion_candidate->failed_areas = $data['failed_areas'];
    $promotion_candidate->save();

    return redirect()->back()->with("success","Changes Saved Successfully!");
}
public function generate_sf5(User $user, $sy, $section_id){
    $schoolyear = Schoolyear::where('id','=', $sy)->first();
    //dd($schoolyear);
    $section = Section::where('id','=', $section_id)->first();

    $m_records = DB::table('promotion_candidates')
    ->join('students', 'student_id', 'students.id')
    ->join('users', 'user_id', 'users.id')
    ->where('promotion_candidates.section_id', $section_id)
    ->where('promotion_candidates.schoolyear_id', $sy)
    ->where('users.sex', 'M')->get();
    //dd($m_records);
    $f_records = DB::table('promotion_candidates')
    ->join('students', 'student_id', 'students.id')
    ->join('users', 'user_id', 'users.id')
    ->where('promotion_candidates.section_id', $section_id)
    ->where('promotion_candidates.schoolyear_id', $sy)
    ->where('users.sex', 'F')->get();
    //dd($f_records);
    return view('sf_pdf.sf5', compact('schoolyear','section','m_records', 'f_records'));
}

// ================================= END OF SF5 =====================================================

// ================================= SF6 FUNCTIONS =====================================================
public function sf6(){
    $currentSY = Schoolyear::where('isCurrent', true)->first();

    // $section_sy = DB::table('sections')
    // ->crossJoin('schoolyears')
    // ->orderBy('schoolyears.year_start', 'DESC')
    // ->orderBy('sections.grade_level', 'ASC')
    // ->select('schoolyears.id as sy', 'year_start', 'year_end', 'isCurrent',
    //     'sections.id as section', 'name','grade_level', 'adviser')
    // ->get()->paginate(20);

    $schoolyears = Schoolyear::orderBy('year_start', 'DESC')->get();

    return view('admin.reports.sf6.view', compact('schoolyears'));
}

public function sf6_show(User $user, $sy, $section_id){
    $schoolyear = Schoolyear::where('id','=', $sy)->first();
    //dd($schoolyear);
    $section = Section::where('id','=', $section_id)->first();
    
    $students = DB::table('student_schoolyears')
    ->join('students', 'student_id', 'students.id')
    ->join('users', 'user_id', 'users.id')
    ->join('sections', 'section_id', 'sections.id')
    ->join('promotion_candidates', 'promotion_candidates.student_id', 'students.id', 'left outer')
        ->where('student_schoolyears.section_id', $section_id)
        ->where('student_schoolyears.schoolyear_id', $sy)
        ->select('student_schoolyears.id as studentsy', 'students.*', 'users.*', 'sections.*', 'promotion_candidates.*')
        ->get();
    //dd($students);
    $studentSY = StudentSchoolyear::where([
        'section_id' => $section_id,
        'schoolyear_id' => $sy
    ])->get();

    //dd($studentSY);
    return view('admin.reports.sf6.show', compact('schoolyear','section','studentSY'));
}

public function sf6_create(User $user, $studentsy){
    $this->authorize('create', $user);
    //dd($studentsy);

    $studSY = StudentSchoolyear::where('id', $studentsy)->first();
    //dd($studSY->StudentRegister);
    $grades = Student::join('student_subj_classes','students.id','student_subj_classes.student_id')
    ->join('student_subj_grades', 'student_subj_classes.id', 'student_subj_grades.student_subj_class_id')
    ->join('subject_classes', 'student_subj_classes.subject_class_id', 'subject_classes.id')
    ->join('subjects', 'subject_classes.subject_id', 'subjects.id')
    ->where('student_subj_classes.student_schoolyear_id', $studentsy)
    ->sum('gen_ave');
    $count = Student::join('student_subj_classes','students.id','student_subj_classes.student_id')
    ->join('student_subj_grades', 'student_subj_classes.id', 'student_subj_grades.student_subj_class_id')
    ->join('subject_classes', 'student_subj_classes.subject_class_id', 'subject_classes.id')
    ->join('subjects', 'subject_classes.subject_id', 'subjects.id')
    ->where('student_subj_classes.student_schoolyear_id', $studentsy)
    ->count();
    // dd($count);
    // dd($grades);
    if($count>0){
        $final_average = $grades/$count;
    }
    //dd($final_average);
    $candidate = PromotionCandidate::where([
        'student_id' => $studSY->student_id,
        'schoolyear_id' => $studSY->schoolyear_id
    ])->first();
    //dd($studentReg);
    $schoolyears = DB::table('schoolyears')
        ->orderBy('year_start')
        ->get();
    
    if(isset($candidate)){
        return view('admin.reports.sf6.edit', compact('schoolyears', 'studSY', 'candidate'));
    }else{
        return view('admin.reports.sf6.create', compact('schoolyears', 'studSY', 'final_average'));
    }
}

public function sf6_store(Request $request)
{
    // validate the input data
    $validated = $request->validate([
        'schoolyear' => ['required'],
        'grade_lvl' => ['required'],
        'section' => ['required'],
        'student' => ['required'],
        'gen_average' => 'required|integer|min:60',
        'action_taken' => 'required|string',
        'failed_areas' => '',
    ]);
    //dd($request->all());

    $new_sf5 = \App\Models\PromotionCandidate::create([
        'student_id' => $validated['student'],
        'section_id' => $validated['section'],
        'gen_average' => $validated['gen_average'],
        'action_taken' => $validated['action_taken'],
        'failed_areas' => $validated['failed_areas'],
        'schoolyear_id' => $validated['schoolyear']
    ]);

    return redirect()->back()->with('success', 'SF5 Created Successfully!');
}

public function sf6_update(Request $request, User $user, $id)
{
    $promotion_candidate = PromotionCandidate::where('id', $id)->first();
    //dd($studentReg);
    // Validation of input
    $data = request()->validate([
        'schoolyear' => ['required'],
        'grade_lvl' => ['required'],
        'section' => ['required'],
        'student' => ['required'],
        'gen_average' => 'required|integer|min:60',
        'action_taken' => 'required|string',
        'failed_areas' => '',
    ]);
    
    $promotion_candidate->student_id = $data['student'];
    $promotion_candidate->section_id = $data['section'];
    $promotion_candidate->gen_average = $data['gen_average'];
    $promotion_candidate->action_taken = $data['action_taken'];
    $promotion_candidate->failed_areas = $data['failed_areas'];
    $promotion_candidate->save();

    return redirect()->back()->with("success","Changes Saved Successfully!");
}
public function generate_sf6(User $user, $sy){
    $schoolyear = Schoolyear::where('id','=', $sy)->first();
    //dd($schoolyear);

    $gr7_records = DB::table('promotion_candidates')
    ->join('students', 'student_id', 'students.id')
    ->join('users', 'user_id', 'users.id')
    ->join('sections', 'section_id', 'sections.id')
    ->where('promotion_candidates.schoolyear_id', $sy)
    ->where('sections.grade_level', 7)
    ->get();
    //dd($gr7_records);
    $gr8_records = DB::table('promotion_candidates')
    ->join('students', 'student_id', 'students.id')
    ->join('users', 'user_id', 'users.id')
    ->join('sections', 'section_id', 'sections.id')
    ->where('promotion_candidates.schoolyear_id', $sy)
    ->where('sections.grade_level', 8)
    ->get();
    //dd($gr8_records);
    $gr9_records = DB::table('promotion_candidates')
    ->join('students', 'student_id', 'students.id')
    ->join('users', 'user_id', 'users.id')
    ->join('sections', 'section_id', 'sections.id')
    ->where('promotion_candidates.schoolyear_id', $sy)
    ->where('sections.grade_level', 9)
    ->get();
    //dd($gr9_records);
    $gr10_records = DB::table('promotion_candidates')
    ->join('students', 'student_id', 'students.id')
    ->join('users', 'user_id', 'users.id')
    ->join('sections', 'section_id', 'sections.id')
    ->where('promotion_candidates.schoolyear_id', $sy)
    ->where('sections.grade_level', 10)
    ->get();
    //dd($gr10_records);
    return view('sf_pdf.sf6', compact('schoolyear','gr7_records', 'gr8_records', 'gr9_records', 'gr10_records'));
}

// ================================= END OF SF6 =====================================================

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

        $sy = Schoolyear::where('id', $studSY->schoolyear_id)->first();
        
        // ======= Calculating age ==========
        $student_bday = $studSY->Student->User->birthdate;      //getting birthdate of student
        
        $date = $sy->year_start.'-06-00 next friday';           //getting date string
        $first_friday = date('Y-m-d', strtotime($date));        //getting actual date of first friday of june
        $age = date_diff(date_create($first_friday), date_create($student_bday))->y;    //calculating age
        //===================================

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
            return view('admin.reports.sf8.create', compact('schoolyears', 'studSY', 'age'));
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

// ================================= SF9 FUNCTIONS =====================================================
public function sf9(){
    $currentSY = Schoolyear::where('isCurrent', true)->first();

    $section_sy = DB::table('sections')
    ->crossJoin('schoolyears')
    ->orderBy('schoolyears.year_start', 'DESC')
    ->orderBy('sections.grade_level', 'ASC')
    ->select('schoolyears.id as sy', 'year_start', 'year_end', 'isCurrent',
        'sections.id as section', 'name','grade_level', 'adviser')
    ->get()->paginate(20);

    return view('admin.reports.sf9.view', compact('section_sy'));
}

public function sf9_show(User $user, $sy, $section_id){
    $schoolyear = Schoolyear::where('id','=', $sy)->first();
    //dd($schoolyear);
    $section = Section::where('id','=', $section_id)->first();
    
    $students = DB::table('student_schoolyears')
    ->join('students', 'student_id', 'students.id')
    ->join('users', 'user_id', 'users.id')
    ->join('sections', 'section_id', 'sections.id')
    ->join('promotion_candidates', 'promotion_candidates.student_id', 'students.id', 'left outer')
        ->where('student_schoolyears.section_id', $section_id)
        ->where('student_schoolyears.schoolyear_id', $sy)
        ->select('student_schoolyears.id as studentsy', 'students.*', 'users.*', 'sections.*', 'promotion_candidates.*')
        ->get();
    //dd($students);
    $studentSY = StudentSchoolyear::where([
        'section_id' => $section_id,
        'schoolyear_id' => $sy
    ])->get();

    //dd($studentSY);
    return view('admin.reports.sf9.show', compact('schoolyear','section','studentSY'));
}

public function sf9_create(User $user, $studentsy){
    $this->authorize('create', $user);
    //dd($studentsy);

    $studSY = StudentSchoolyear::where('id', $studentsy)->first();
    //dd($studSY->StudentRegister);
    $grades = Student::join('student_subj_classes','students.id','student_subj_classes.student_id')
    ->join('student_subj_grades', 'student_subj_classes.id', 'student_subj_grades.student_subj_class_id')
    ->join('subject_classes', 'student_subj_classes.subject_class_id', 'subject_classes.id')
    ->join('subjects', 'subject_classes.subject_id', 'subjects.id')
    ->where('student_subj_classes.student_schoolyear_id', $studentsy)
    ->sum('gen_ave');
    $count = Student::join('student_subj_classes','students.id','student_subj_classes.student_id')
    ->join('student_subj_grades', 'student_subj_classes.id', 'student_subj_grades.student_subj_class_id')
    ->join('subject_classes', 'student_subj_classes.subject_class_id', 'subject_classes.id')
    ->join('subjects', 'subject_classes.subject_id', 'subjects.id')
    ->where('student_subj_classes.student_schoolyear_id', $studentsy)
    ->count();
    // dd($count);
    // dd($grades);
    if($count>0){
        $final_average = $grades/$count;
    }
    //dd($final_average);
    $candidate = PromotionCandidate::where([
        'student_id' => $studSY->student_id,
        'schoolyear_id' => $studSY->schoolyear_id
    ])->first();
    //dd($studentReg);
    $schoolyears = DB::table('schoolyears')
        ->orderBy('year_start')
        ->get();
    
    if(isset($candidate)){
        return view('admin.reports.sf9.edit', compact('schoolyears', 'studSY', 'candidate'));
    }else{
        return view('admin.reports.sf9.create', compact('schoolyears', 'studSY', 'final_average'));
    }
}

public function sf9_store(Request $request)
{
    // validate the input data
    $validated = $request->validate([
        'schoolyear' => ['required'],
        'grade_lvl' => ['required'],
        'section' => ['required'],
        'student' => ['required'],
        'gen_average' => 'required|integer|min:60',
        'action_taken' => 'required|string',
        'failed_areas' => '',
    ]);
    //dd($request->all());

    $new_sf5 = \App\Models\PromotionCandidate::create([
        'student_id' => $validated['student'],
        'section_id' => $validated['section'],
        'gen_average' => $validated['gen_average'],
        'action_taken' => $validated['action_taken'],
        'failed_areas' => $validated['failed_areas'],
        'schoolyear_id' => $validated['schoolyear']
    ]);

    return redirect()->back()->with('success', 'SF9 Created Successfully!');
}

public function sf9_update(Request $request, User $user, $id)
{
    $promotion_candidate = PromotionCandidate::where('id', $id)->first();
    //dd($studentReg);
    // Validation of input
    $data = request()->validate([
        'schoolyear' => ['required'],
        'grade_lvl' => ['required'],
        'section' => ['required'],
        'student' => ['required'],
        'gen_average' => 'required|integer|min:60',
        'action_taken' => 'required|string',
        'failed_areas' => '',
    ]);
    
    $promotion_candidate->student_id = $data['student'];
    $promotion_candidate->section_id = $data['section'];
    $promotion_candidate->gen_average = $data['gen_average'];
    $promotion_candidate->action_taken = $data['action_taken'];
    $promotion_candidate->failed_areas = $data['failed_areas'];
    $promotion_candidate->save();

    return redirect()->back()->with("success","Changes Saved Successfully!");
}
public function generate_sf9(User $user, $student){
    $studentSY = StudentSchoolyear::where('id', '=', $student)->first();
    $schoolyear = Schoolyear::where('id', '=', $studentSY->schoolyear_id)->first();
    //dd($schoolyear);
    $section = Section::where('id','=', $studentSY->section_id)->first();

    // $m_records = DB::table('promotion_candidates')
    // ->join('students', 'student_id', 'students.id')
    // ->join('users', 'user_id', 'users.id')
    // ->where('promotion_candidates.section_id', $section_id)
    // ->where('promotion_candidates.schoolyear_id', $sy)
    // ->where('users.sex', 'M')->get();
    // //dd($m_records);
    // $f_records = DB::table('promotion_candidates')
    // ->join('students', 'student_id', 'students.id')
    // ->join('users', 'user_id', 'users.id')
    // ->where('promotion_candidates.section_id', $section_id)
    // ->where('promotion_candidates.schoolyear_id', $sy)
    // ->where('users.sex', 'F')->get();
    //dd($f_records);
    return view('sf_pdf.sf9', compact('studentSY', 'schoolyear','section'));
}

// ================================= END OF SF9 =====================================================

    public function getStudents(Request $request){
        $students = DB::table('student_schoolyears')
            ->where('section_id', $request->section)
            ->get();
        if (count($students) > 0) {
            return response()->json($students);
        }
    }
}