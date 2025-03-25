<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
class authcontroller extends Controller
{
    public function loginview(){
      return view('Auth.login');
      
    }
    public function loginstore(Request $res){
      
   $aaa = $res->validate([
      'username' => 'required',
      'password' => 'required',
      ]);
      if(Auth::attempt($aaa)){
      
        if(Auth::user()->type == 0){
                return redirect()->to('/');
            }
            elseif (Auth::user()->type == 1) {
                return redirect()->to('admin');
            }
      }
      return redirect()->back()->with('loginmessage', 'Wrong Password and Username');
        
  //  return "logg";
    }
    
    public function logout(Request $res){
      
      Auth::guard('web')->logout();

        $res->session()->invalidate();

        $res->session()->regenerateToken();

        return redirect('/');
    }
}
