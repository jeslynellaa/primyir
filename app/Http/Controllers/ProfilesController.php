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

class ProfilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public function edit(\App\Models\User $user)
    {
       return view('profile.edit-profile', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        if(strcmp($user->email, $request->email) == 0){
            if(strcmp($user->contactNum, $request->contactNum) == 0){
                return redirect()->back()->with("error","No changes made.");
            }
        }

        if(strcmp($user->email, $request->email) == 0){
            $data = request()->validate([
                'givenName' => '',
                'lastName' => '',
                'email' => '',
                'contactNum' => ['digits:11'],
                'birthdate' => ''
            ]);
        }
        else{ 
            $data = request()->validate([
                'givenName' => '',
                'lastName' => '',
                'email' => ['string', 'email', 'max:255', 'unique:users'],
                'contactNum' => ['digits:11'],
                'birthdate' => ''
            ]);
        }

        //dd($data);
        $user->update($data);

        // $validatedData = $request->validate([
        //     'email' => ['string', 'email', 'max:255', 'unique:users'],
        //     'contactNum' => ['digits:11']
        // ]);

        // dd($request);
        
        // $user = Auth::user();
        // $user->email = $request->get('email');
        // $user->contactNum = $request->get('contactNum');
        // $user->save();
        
        return redirect("/profile/{$user->id}/edit");
    }

    
}
