<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Region;
use App\Models\Province;
use App\Models\CityMunicipality;
use App\Models\Barangay;
use App\Models\address;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
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
        $regions = $this->getRegions();
        
        $region_code = $user->Address->region ?? 5;
        $user_region = DB::table('regions')->where('code', $region_code)->first();

        $province_code = $user->Address->province ?? '';
        $user_province = DB::table('provinces')->where('code', $province_code)->first();

        $city_code = $user->Address->city ?? '';
        $user_city = DB::table('city_municipalities')->where('code', $city_code)->first();

        $barangay_code = $user->Address->barangay ?? '';
        $user_barangay = DB::table('barangays')->where('code', $barangay_code)->first();

        //dd($user_region, $user_province, $user_city, $user_barangay);
        return view('profile.edit-profile', compact([
            'user', 
            'regions', 
            'user_region', 
            'user_province', 
            'user_city', 
            'user_barangay', 'roleName']
        ));
    }
    

    // EDIT FUNCTION FOR PERSONAL INFO
    public function updateInfo(Request $request, User $user)
    {
        $this->authorize('update', $user);
        $regions = $this->getRegions();
        
        if(strcmp($user->email, $request->email) == 0 && strcmp($user->username, $request->username) == 0){
            $data = request()->validate([
                'email' => '',
                'contactNum' => ['digits:11'],
                'username' => ''
            ]);
            if(strcmp($user->contactNum, $request->contactNum) == 0){
                return redirect()->back()->with("error","No changes made.");
            }
        }
        else if(strcmp($user->email, $request->email) == 0){ 
            $data = request()->validate([
                'email' => '',
                'contactNum' => ['digits:11'],
                'username' => ['required', 'string', 'max:255', 'unique:users']
            ]);
        }else if(strcmp($user->username, $request->username) == 0){ 
            $data = request()->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'contactNum' => ['digits:11'],
                'username' => ''
            ]);
        }else{
            $data = request()->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'contactNum' => ['digits:11'],
                'username' => ['required', 'string', 'max:255', 'unique:users']
            ]);
        }
        $user = Auth::user();
        $user->update($data);
        
        return redirect()->back()->with("success","Changes saved successfully!");
    }

    // EDIT FUNCTION FOR PERSONAL INFO
    public function updateAddress(Request $request, User $user)
    {
        $this->authorize('update', $user);

        $regions = $this->getRegions();

        if($request->region == $user->address->region){
            if($request->province == $user->address->province){
                if($request->city == $user->address->region){
                    if($request->barangay == $user->address->region){
                        if(strcmp($user->address->street, $request->street) == 0){
                            return redirect()->back()->with("error","No changes made.");
                        }
                    }
                }
            }
        }

        $validatedData = $request->validate([
            'street'=>'',
            'barangay'=>'',
            'city'=>'',
            'province'=>'',
            'region'=>'',
        ]);
        $user = Auth::user();
        $user->address()->update($validatedData);
        
        return redirect()->back()->with("success","Changes saved successfully!");
    }

    // ============= ADDRESS DROPDOWN FUNCTIONS ================= //
    public function getRegions(){
        $regions = DB::table('regions')->get();
        return $regions;
    }
    public function getProvinces(Request $request){
        $provinces = DB::table('provinces')
            ->where('region_code', $request->region_code)
            ->get();
        if (count($provinces) > 0) {
            return response()->json($provinces);
        }
    }
    public function getCities(Request $request){
        $cities = DB::table('city_municipalities')
            ->where('province_code', $request->province_code)
            ->get();
        if (count($cities) > 0) {
            return response()->json($cities);
        }
    }
    public function getBarangays(Request $request){
        $barangays = DB::table('barangays')
            ->where('city_code', $request->city_code)
            ->get();
        if (count($barangays) > 0) {
            return response()->json($barangays);
        }
    }
}
