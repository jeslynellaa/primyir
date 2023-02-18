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
        return view('admin.reports.sf1_view');
    }

    public function sf1_create(User $user){
        $this->authorize('create', $user);

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

        return view('admin.reports.sf1_create', compact('schoolyears'));
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

    public function getStudents(Request $request){
        $students = DB::table('student_schoolyears')
            ->where('section_id', $request->section)
            ->get();
        if (count($students) > 0) {
            return response()->json($students);
        }
    }
}

