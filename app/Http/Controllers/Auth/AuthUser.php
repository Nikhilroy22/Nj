<?php

namespace App\Http\Controllers\Auth;

use App\Models\categorys;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthUser extends Controller
{
    public function addpost(){
      $ccc = categorys::all();
      return view('Auth.AddPost', ['sss' => $ccc]);
}
}
