<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class signupcontroller extends Controller
{
    public function signupview(){
      
      
      return view('Auth.signup');
    }
    public function signupstore(Request $res){
    $vali = $res->validate([
        'username' => 'required|unique:users',
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        ],
        [
          'name.required' => 'nikhil required'
          ]
        );
      User::create($vali);
      return redirect()->back()->with('success', 'Registration Successfull');
    }
}
