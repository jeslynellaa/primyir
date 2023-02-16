<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Address;
use App\Models\Teacher;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $teacher_users = DB::table('users')
            ->join('teachers', 'teachers.user_id', '=', 'users.id')
            ->where('users.owner_type', 'T')
            ->select('users.*', 'teachers.department')
            ->orderBy('lastName', 'ASC')
            ->get()->paginate(5);

        return view('admin.faculty.index', compact('teacher_users'));
    }
    
    public function create(User $user)
    {
        $this->authorize('create', $user);

        return view('admin.faculty.create');
    }

    public function store(Request $request, User $user)
    {
        $this->authorize('create', $user);

        $data = request()->validate([
            'givenName' => ['required', 'string', 'max:255'],
            'middleName' => ['max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'birthdate' => ['required'],
            'contactNum' => ['digits:11'],
            'sex' => ['required'],
            'department' => ['required'],
            'advisory' => '',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'accountStatus' => ['required'],
            'owner_type' => ['required']
        ]);

        $newuser = \App\Models\User::create([
            'givenName' => $data['givenName'],
            'middleName' => $data['middleName'],
            'lastName' => $data['lastName'],
            'birthdate' => $data['birthdate'],
            'contactNum' => $data['contactNum'],
            'sex' => $data['sex'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'accountStatus' => $data['accountStatus'],
            'owner_type' => $data['owner_type']
        ]);

        $userid = $newuser->id;

        $newteacher = \App\Models\Teacher::create([
            'user_id' => $userid,
            'department' => $data['department'],
            'advisory' => 0
        ]);
        
        return redirect()->back()->with("success","New Teacher Account Created Successfully!");
    }

    public function update(User $user)
    {
        
    }

    public function generate_sf1(){
        return view('sf_pdf.sf1');
    }

    public function generate_sf2(){
        return view('sf_pdf.sf2');
    }
    
    public function generate_sf4(){
        return view('sf_pdf.sf4');
    }

}
