<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function edit(\App\Models\User $user)
    {
       return view('admin.edit-profile', compact('user'));
    }

    public function update(\App\Models\User $user)
    {
       return view('admin.edit-profile', compact('user'));
    }
}
