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
    return view('admin.reports.sf1');
    }
    public function sf2(){
    return view('admin.reports.sf2');
    }
    public function sf4(){
    return view('admin.reports.sf4');
    }
    public function sf8(){
    return view('admin.reports.sf8');
    }
}

