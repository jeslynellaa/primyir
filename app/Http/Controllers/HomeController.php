<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Section;
use App\Models\Teacher;
use App\Models\Event;
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
    public function index()
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

        //dd($student_count);
        return view('admin.home', compact('student_count', 'faculty_count', 'event_count', 'class_count'));
    }

}
