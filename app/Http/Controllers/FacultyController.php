<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Address;
use App\Models\Teacher;
use App\Models\StudentRegister;
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
            ->select('users.*', 'teachers.department', 'teachers.id as teach_id')
            ->orderBy('lastName', 'ASC')
            ->get()->paginate(15);
        $teachers = \App\Models\Teacher::all();

        return view('admin.faculty.index', compact('teacher_users', 'teachers'));
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


    public function show(User $user, $id)
    {
        $teacher = \App\Models\Teacher::find($id);

        $teacher_subjects = DB::table('teachers')
            ->join('subject_classes', 'teachers.id', '=', 'subject_classes.teacher_id')
            ->join('subjects', 'subjects.id', '=', 'subject_classes.subject_id')
            ->join('sections', 'sections.id', '=', 'subject_classes.section_id')
            ->where('teachers.id', $id)
            ->select('subjects.name as subject', 'sections.grade_level as grade', 'sections.name as section')
            ->get();

        $address = DB::table('addresses')
        ->join('users', 'addresses.user_id', '=', 'users.id')
        ->join('barangays', 'addresses.barangay', '=', 'barangays.code', 'left outer')
        ->join('city_municipalities', 'addresses.city', '=', 'city_municipalities.code', 'left outer')
        ->join('provinces', 'addresses.province', '=', 'provinces.code', 'left outer')
        ->join('regions', 'addresses.region', '=', 'regions.code', 'left outer')
        ->join('teachers', 'teachers.user_id', '=', 'users.id')
        ->where('teachers.id', $id)
        ->select('barangays.name as brgy', 'city_municipalities.name as city', 'provinces.name as province', 'regions.name as region', 'addresses.street')
        ->first();

        return view('admin.faculty.view', compact('teacher_subjects', 'teacher', 'address'));
    }

    public function edit(User $user, $id)
    {
        $this->authorize('create', $user);

        $teacher = \App\Models\Teacher::find($id);

        return view('admin.faculty.edit', compact('teacher'));
    }

    public function update(Request $request, User $user, $id)
    {
        $this->authorize('create', $user);

        $teacher = \App\Models\Teacher::find($id);

        if((strcmp($teacher->user->email, $request->email) == 0) && (strcmp($teacher->user->username, $request->username) == 0)){
            $user_data = request()->validate([
                'givenName' => ['string', 'max:255'],
                'middleName' => ['max:255'],
                'lastName' => ['string', 'max:255'],
                'birthdate' => [''],
                'contactNum' => ['nullable', 'digits:11'],
                'sex' => ['required'],
                'email' => '',
                'username' => '',
                'accountStatus' => ['required']
            ]);
        }else if(strcmp($teacher->user->email, $request->email) == 0){
            $user_data = request()->validate([
                'givenName' => ['string', 'max:255'],
                'middleName' => ['max:255'],
                'lastName' => ['string', 'max:255'],
                'birthdate' => [''],
                'contactNum' => ['nullable', 'digits:11'],
                'sex' => ['required'],
                'email' => '',
                'username' => ['max:255', 'unique:users'],
                'accountStatus' => ['required']
            ]);
        }else if(strcmp($teacher->user->username, $request->username) == 0){
            $user_data = request()->validate([
                'givenName' => ['string', 'max:255'],
                'middleName' => ['max:255'],
                'lastName' => ['string', 'max:255'],
                'birthdate' => [''],
                'contactNum' => ['nullable', 'digits:11'],
                'sex' => ['required'],
                'email' => ['string', 'email', 'max:255', 'unique:users'],
                'username' => '',
                'accountStatus' => ['required']
            ]);
        }else{
            $user_data = request()->validate([
                'givenName' => ['string', 'max:255'],
                'middleName' => ['max:255'],
                'lastName' => ['string', 'max:255'],
                'birthdate' => [''],
                'contactNum' => ['nullable', 'digits:11'],
                'sex' => ['required'],
                'email' => ['string', 'email', 'max:255', 'unique:users'],
                'username' => ['max:255', 'unique:users'],
                'accountStatus' => ['required']
            ]);
        }

        $teach_data = request()->validate([
            'department' => 'string'
        ]);

        $teacher->user->update($user_data);
        $teacher->update($teach_data);
        
        return redirect()->back()->with("success","Changes Saved Successfully!");
    }


    public function generate_sf1(){
        $records = \App\Models\StudentRegister::all();
        return view('sf_pdf.sf1', compact('records'));
    }

    public function generate_sf2(){
        return view('sf_pdf.sf2');
    }
    
    public function generate_sf4(){
        return view('sf_pdf.sf4');
    }

    public function generate_sf5(){
        return view('sf_pdf.sf5');
    }

    public function generate_sf9(){
    return view('sf_pdf.sf9');
    }

    public function faculty_search(Request $request){
        $query = $request->input('query');
        $teacher_users = DB::table('users')
                    ->join('teachers', 'teachers.user_id', '=', 'users.id')
                    ->where('givenName', 'LIKE', "%$query%")
                    ->orWhere('middleName', 'LIKE', "%$query%")
                    ->orWhere('lastName', 'LIKE', "%$query%")
                    ->select('users.*', 'teachers.department', 'teachers.id as teach_id')    ->orderBy('lastName', 'ASC')
                    ->get()->paginate(5);
       
        return view('admin.faculty.index', compact('teacher_users'));
    }
}
