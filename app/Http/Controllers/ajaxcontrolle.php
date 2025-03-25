<?php

namespace App\Http\Controllers;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Artisan;
class ajaxcontrolle extends Controller
{
  
  public function cloud(Request $request){
    $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getPublicId();

    return response()->json(['url' => $uploadedFileUrl]);
   //$jj = $request->file('image');
   //$fileName = $jj->extension();
 //  return $jj;
    https://res.cloudinary.com/dp6uamesu/image/upload/v1740237901/wkcj4kv6hmotjylhv4uh.jpg
    
  }
    public function login(){
     // Artisan::call('route:list');
      return view('Ajax.login');
    }
    
    public function loginpost(Request $res){
      
      $vali = $res->validate([
        'aname' => 'required|unique:users',
      
        'apass' => 'required',
        ],
        [
          'aname.required' => 'nikhil required'
          ]
        );
      $janu = $res->aname;
      $passa = $res->apass;
      
      
      if(Auth::attempt([
      'username' => $janu,
      'password' => $passa,
      ])){
     
       return response()->json(['Login' => 'login success']); 
        
      }
      
      return response()->json(['UserName' => $janu,
      'PassWord' => $passa,
      ]);
    }
}
