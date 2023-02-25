<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Schoolyear;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SchoolyearsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $schoolyears = DB::table('schoolyears')
        ->orderBy('date_start', 'ASC')
        ->get();

        return view('admin.schoolyears.index', compact('schoolyears'));
    }
    
    public function create(User $user)
    {
        // Getting curricula data set for dropdown in forms
        $curricula = DB::table('curricula')
            ->select('id', 'name')
            ->orderBy('name', 'ASC')
            ->get();
        
        // Getting schoolyear data set for dropdown in forms
        $schoolyears = DB::table('schoolyears')
        ->select('id', 'year_start', 'year_end')
        ->orderBy('date_start', 'ASC')
        ->get();

        return view('admin.schoolyears.create', compact('curricula', 'schoolyears'));
    }

    public function store(Request $request, User $user)
    {
        // Validation of input
        $data = request()->validate([
            'name' => ['required', 'string', 'max:50'],
            'grade_level' => ['required'],
            'curriculum' => ['required'],
            'schoolyear' => ['required'],
            'elective' => ''
        ]);

        // Checking if the array contains 'elective' property
        if (isset($data['elective'])){
            $new_subject = \App\Models\Subject::create([
                'name' => $data['name'],
                'grade_level' => $data['grade_level'],
                'curriculum_id' => $data['curriculum'],
                'schoolyear_id' => $data['schoolyear'],
                'elective' => $data['elective'],
            ]);
        }
        else{
            // if elective is not set, assign with 0
            $new_subject = \App\Models\Subject::create([
                'name' => $data['name'],
                'grade_level' => $data['grade_level'],
                'curriculum_id' => $data['curriculum'],
                'schoolyear_id' => $data['schoolyear'],
                'elective' => 0,
            ]);
        }
        
        //dd($new_subject);
        return redirect()->back()->with("success","New Subject Created!");
    }

    public function edit ($id){
        $subjectData = Subject::find($id);
        return response()->json([
           'status' =>200,
           'subjectData' =>$subjectData,
       ]);
    }

    public function update(User $user, Request $request){

        //dd($request);
        $this->authorize('create', $user);
        
        $data = request()->validate([
            'name' => ['string', 'max:50'],
            'grade_level' =>'',
            'curriculum' =>'',
            'schoolyear' =>'',
            'elective' => ''
        ]);
        
        $subject =\App\Models\Subject::find($request->subject_id);
        $subject->update($data);
        
        return redirect()->back()->with("success","Changes saved successfully");
    }
}
