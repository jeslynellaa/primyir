<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(\App\Models\User $user)
    {
       return view('auth.passwords.change', compact('user'));
    }

    public function update(Request $request) {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
    }

    // public function update(Request $request, User $user)
    // {
    //     if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
    //         return redirect()->back()->with("error","Your current password does not matches with the password.");
    //     }

    //     if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
    //         return redirect()->back()->with("error","New Password cannot be same as your current password.");
    //     }

    //     $validatedData = $request->validate([
    //         'current_password' => ['required'],
    //         'new_password' => ['required', 'same:confirm_password', 'min:8'],
    //         'confirm_password' => ['required']
    //     ]);

    //     //Change pw
    //     $user = Auth::user();
    //     $user->password = Hash::make($request->get('new-password'));
    //     $user->save();
        
    //     return redirect()->back()->with("success","Password successfully changed!");
        //===================================================================
        // $data = request()->validate([
        //     'current_password' => ['required'],
        //     'new_password' => ['required', 'same:confirm_password', 'min:8'],
        //     'confirm_password' => ['required']
        // ]);

        // $userPassword = $user->password;

        // if (!Hash::check($data->current_password, $userPassword)) {
        //     return back()->withErrors(['current_password'=>'password not match']);
        // }


        // $user->update($data);

        // return redirect("/pw/{users}/edit")->with('success','password successfully updated');
    //}
}
