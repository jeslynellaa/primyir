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
        ->orderBy('date_start', 'DESC')
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

    public function store(Request $request)
    {
        // Validation of input
        $validator = Validator::make($request->all(), [
            'date_start' => '',
            'date_end' => '',
        ]);

        $date_start = date("Y-m-d", strtotime($request->input('date_start')));
        $date_end = date("Y-m-d", strtotime($request->input('date_end')));
        $year_start = date("Y", strtotime($request->input('date_start')));
        $year_end = date("Y", strtotime($request->input('date_end')));

        $schoolyear = new Schoolyear;

        $schoolyear->date_start = $date_start;
        $schoolyear->date_end = $date_end;
        $schoolyear->year_start = $year_start;
        $schoolyear->year_end = $year_end;

        $schoolyear->save();
    }

    public function edit ($id){
        $schoolyear = Schoolyear::find($id);

        if($schoolyear){
            return response()->json([
                'status' =>200,
                'schoolyear' =>$schoolyear,
            ]);
        }else{
            return response()->json([
                'status' =>404,
                'message' =>"School Year Not Found",
            ]);
        }
    }

    public function update(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'date_start' => '',
            'date_end' => '',
        ]);
        
        $date_start = date("Y-m-d", strtotime($request->input('date_start')));
        $date_end = date("Y-m-d", strtotime($request->input('date_end')));
        $year_start = date("Y", strtotime($request->input('date_start')));
        $year_end = date("Y", strtotime($request->input('date_end')));

        if($validator->fails())
        {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }else{
            $schoolyear =\App\Models\Schoolyear::find($id);
            if($schoolyear){
                $schoolyear->date_start = $date_start;
                $schoolyear->date_end = $date_end;
                $schoolyear->year_start = $year_start;
                $schoolyear->year_end = $year_end;
                $schoolyear->update();

                return response()->json([
                    'status' =>200,
                    'message' => "Changes Saved Successfully!"
                ]);
            }else{
                return response()->json([
                    'status' =>404,
                    'message' =>"School Year Not Found",
                ]);
            }
        }
    }
}
