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

class SectionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $section_teachers = DB::table('sections')
            ->join('teachers', 'teachers.id', '=', 'adviser')
            ->join('users', 'users.id', '=', 'teachers.user_id')
            ->select('sections.grade_level', 'sections.name', 'sections.adviser', 'users.givenName', 'users.lastName')
            ->orderBy('grade_level')
            ->get();

        //dd($section_teachers);
        return view('admin.sections.index', compact('section_teachers'));
    }
    
    public function create(User $user)
    {
        $teachers = DB::table('users')
            ->where('accountStatus', 'Active')
            ->where('owner_type', 'T')
            ->select('id', 'givenName', 'lastName')
            ->orderBy('lastName', 'ASC')
            ->get();

        //dd($teachers);
        return view('admin.sections.create', compact('teachers'));
    }

    public function store(Request $request, User $user)
    {
        $data = request()->validate([
            'name' => ['required', 'string', 'max:50', 'unique:sections'],
            'grade_level' => ['required'],
            'adviser' => ''
        ]);
        
        //dd($data);

        $new_section = \App\Models\Section::create([
            'name' => $data['name'],
            'grade_level' => $data['grade_level'],
            'adviser' => $data['adviser'],
        ]);
        return redirect()->back()->with("success","New Section Created!");
    }
}
