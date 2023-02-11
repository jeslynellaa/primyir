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

    public function index()
    {
        // Joining sections, teachers, and users into section_teachers for displaying in sections table
        $section_teachers = DB::table('sections')
            ->join('teachers', 'teachers.id', '=', 'adviser')
            ->join('users', 'users.id', '=', 'teachers.user_id')
            ->select('sections.grade_level', 'sections.name', 'sections.adviser', 'users.givenName', 'users.lastName')
            ->orderBy('grade_level')
            ->get();

        return view('admin.reports.index');
    }

    public function sf1()
    {
        // Joining sections, teachers, and users into section_teachers for displaying in sections table
        $section_teachers = DB::table('sections')
            ->join('teachers', 'teachers.id', '=', 'adviser')
            ->join('users', 'users.id', '=', 'teachers.user_id')
            ->select('sections.grade_level', 'sections.name', 'sections.adviser', 'users.givenName', 'users.lastName')
            ->orderBy('grade_level')
            ->get();

        return view('admin.reports.index');
    }
    
}
