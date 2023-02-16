<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Section;
use App\Models\Teacher;
use App\Models\Curriculum;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        $user = Auth::user();
        $role = $user->owner_type;
        if ($role == 'A'){
            $roleName = 'admin';
        }
        else if ($role == 'T'){
            $roleName = 'faculty';
        }
        else{
            $roleName = 'student';
        }
        $route_name = $roleName . '.' . 'index';
        
        return redirect()->route($route_name);
    }

    public function admin()
    {
        $student_count = DB::table('users')
        ->where('users.accountStatus', 'Active')
        ->where('users.owner_type', 'S')
        ->count();

        $faculty_count = DB::table('users')
        ->where('users.accountStatus', 'Active')
        ->where('users.owner_type', 'T')
        ->count();
        
        $today = date("Y-m-d");
        //dd($today);
        $event_count = DB::table('events')
        ->where('event_date', '>', $today)
        ->count();

        $class_count = DB::table('sections')
        ->count();

        $record1 = DB::table('students')
            ->join('student_schoolyears', 'student_schoolyears.student_id', '=', 'students.id')
            ->join('curricula', 'students.curriculum_id', '=', 'curricula.id')
            ->select(DB::raw('count(*) as user_count, curricula.name'))
            ->groupBy('curricula.name')
            ->where('student_schoolyears.schoolyear_id', '=', 10103)
            ->get();

        $record2 = DB::table('students')
            ->join('student_schoolyears', 'student_schoolyears.student_id', '=', 'students.id')
            ->join('sections', 'student_schoolyears.section_id', '=', 'sections.id')
            ->select(DB::raw('count(*) as user_count, grade_level'))
            ->groupBy('grade_level')
            ->where('student_schoolyears.schoolyear_id', '=', 10103)
            ->get();

        $record3 = DB::table('students')
            ->join('student_schoolyears', 'student_schoolyears.student_id', '=', 'students.id')
            ->join('schoolyears', 'student_schoolyears.schoolyear_id', '=', 'schoolyears.id')
            ->select(DB::raw('count(*) as user_count, schoolyear_id, year_start, year_end'))
            ->groupBy('schoolyear_id', 'year_start', 'year_end')
            ->get();
        //dd($record3);

        $data1 = [];
        $labels1 = [];
        $data2 = [];
        $labels2 = [];
        $data3 = [];
        $labels3 = [];
    
        foreach($record1 as $row) {
            $labels1[] = $row->name;
            $data1[] = $row->user_count;
        }

        foreach($record2 as $row) {
            $labels2[] = $row->grade_level;
            $data2[] = $row->user_count;
        }
        foreach($record3 as $row) {
            $labels3[] = $row->year_start."-".$row->year_end;
            $data3[] = $row->user_count;
        }
        return view('admin.index', 
        compact('student_count', 'faculty_count', 'event_count','class_count', 'labels1', 'data1', 'labels2', 'data2', 'labels3', 'data3'));
    }

    public function getCurricula(){
        
    }

    public function faculty()
    {
        return view('faculty.index');
    }
}
