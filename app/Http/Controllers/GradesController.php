<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Section;
use App\Models\Schoolyear;
use App\Models\SubjectClass;
use App\Models\StudentSubjClass;
use App\Models\StudentSubjGrade;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }

    public function index(User $user){
        $faculty = Auth::user();
        //dd( $faculty->Teacher->id);
        // Joining sections, teachers, and users into section_teachers for displaying in sections table
        $subject_classes = DB::table('subject_classes')
            ->join('teachers', 'teachers.id', '=', 'subject_classes.teacher_id')
            ->where('teachers.id', $faculty->Teacher->id)
            ->join('subjects', 'subjects.id', '=', 'subject_classes.subject_id')
            ->join('sections', 'sections.id', '=', 'subject_classes.section_id')
            ->select('subject_classes.id as subclass_id', 'subject_classes.teacher_id','subjects.name as subject', 'sections.name as section', 'sections.grade_level as grade')
            ->orderBy('grade')
            ->get();
        //dd($subject_classes);

        return view ('faculty.grades.index', compact('subject_classes'));
    }

    public function show(User $user, $id)
    {
        //dd($id);
        $currentSY = Schoolyear::where('isCurrent', true)->first();
        $subject_class = \App\Models\SubjectClass::find($id);
        //$students = \App\Models\StudentSubjClass::where('subject_class_id', $id)->get();
        $students = StudentSubjClass::where([
            'subject_class_id' => $id,
            'student_schoolyear_id' => $currentSY->id
        ])->get();
        $faculty = Auth::user();
        //dd( $students);
        // Joining sections, teachers, and users into section_teachers for displaying in sections table
        $student_grades = DB::table('student_subj_classes')
            ->join('student_subj_grades', 'student_subj_classes.id', '=', 'student_subj_grades.student_subj_class_id')
            ->join('students', 'student_subj_classes.student_id', '=', 'students.id')
            ->join('users', 'students.user_id', '=', 'users.id')
            ->where('subject_class_id', $id)
            ->select('users.lastname', 'users.givenname','users.middlename', 'student_subj_grades.*')
            ->get();
        //dd($student_grades);
        return view('faculty.grades.show', compact('students', 'subject_class', 'student_grades'));
    }

    public function edit(Request $request, User $user, $id, $grading)
    {
        $currentSY = Schoolyear::where('isCurrent', true)->first();
        //dd($grading);
        $subject_class = \App\Models\SubjectClass::find($id);
        $grading = $grading;

        switch ($grading) {
            case 1:
                $student_grades = DB::table('student_subj_classes')
                    ->join('student_subj_grades', 'student_subj_classes.id', '=', 'student_subj_grades.student_subj_class_id')
                    ->join('students', 'student_subj_classes.student_id', '=', 'students.id')
                    ->join('users', 'students.user_id', '=', 'users.id')
                    ->where('subject_class_id', $id)
                    ->select('users.lastname', 'users.givenname','users.middlename', 'student_subj_grades.first_grading as grades', 'student_subj_grades.id as id')
                    ->get();
                    $students = StudentSubjClass::where([
                        'subject_class_id' => $id,
                        'student_schoolyear_id' => $currentSY->id
                    ])->get();
                    
              break;
            case 2:
                $student_grades = DB::table('student_subj_classes')
                ->join('student_subj_grades', 'student_subj_classes.id', '=', 'student_subj_grades.student_subj_class_id')
                ->join('students', 'student_subj_classes.student_id', '=', 'students.id')
                ->join('users', 'students.user_id', '=', 'users.id')
                ->where('subject_class_id', $id)
                ->select('users.lastname', 'users.givenname','users.middlename', 'student_subj_grades.second_grading as grades', 'student_subj_grades.id as id')
                ->get();
              break;
            case 3:
                $student_grades = DB::table('student_subj_classes')
                ->join('student_subj_grades', 'student_subj_classes.id', '=', 'student_subj_grades.student_subj_class_id')
                ->join('students', 'student_subj_classes.student_id', '=', 'students.id')
                ->join('users', 'students.user_id', '=', 'users.id')
                ->where('subject_class_id', $id)
                ->select('users.lastname', 'users.givenname','users.middlename', 'student_subj_grades.third_grading as grades', 'student_subj_grades.id as id')
                ->get();
              break;
            case 4:
                $student_grades = DB::table('student_subj_classes')
                ->join('student_subj_grades', 'student_subj_classes.id', '=', 'student_subj_grades.student_subj_class_id')
                ->join('students', 'student_subj_classes.student_id', '=', 'students.id')
                ->join('users', 'students.user_id', '=', 'users.id')
                ->where('subject_class_id', $id)
                ->select('users.lastname', 'users.givenname','users.middlename', 'student_subj_grades.fourth_grading as grades', 'student_subj_grades.id as id')
                ->get(); 
        }
        return view('faculty.grades.edit', compact('subject_class','grading', 'students'));
    }


    public function update(Request $request, User $user, $subjectClass)
    {
        //dd($request->all());
        $grading = $request->grading;
        dd($grading);
        foreach ($request->student_subgrades as $key => $value) {
            $data = request()->validate([
                'student_subgrades' => '',
                'grades' => ''
            ]);
            $StudentSubjGrade = \App\Models\StudentSubjGrade::find($value);
            switch ($grading) {
                case 1:
                    $StudentSubjGrade->update([
                        
                    ]);
                    break;
                case 2:
                    break;
                case 3:
                    break;
                case 4:
            }
        }

        return redirect()->back()->with("success","Grades Saved Successfully!");
    }
}
