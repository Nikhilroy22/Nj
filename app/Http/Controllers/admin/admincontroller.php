<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categorys;
use App\Models\postmodel;
use App\Models\User;
use Validator;
class admincontroller extends Controller
{
    public function index(){
     $usr = User::all();
      return view('admin.index', ['user' => $usr,]);
    }
    
  public function addpostview(){
      $ccc = categorys::all();
      return view('admin.addpost', ['sss' => $ccc]);
    }  
    
    public function addpost(Request $res){
   $ooo = $res->validate([
        'category' => 'required',
        'slug' => 'required|unique:postmodels|unique:categorys',
        'body' => 'required',
       'file' => 'required',
       
        ],[
          'category.required' => 'The Category select'
          ]);
          
      $file = $res->file('file');
        $fileName = $file->getClientOriginalName();
       $filePath = $file->move(public_path('upload'), $fileName); 
        

          postmodel::create([
              'title' => $res->slug,
              'postby' => auth()->user()->name,
              'file' => $fileName,
              'body' => $res->body,
              'slug' => Str::slug($res->slug),
              'category' => $res->category,
              
              ]);
          
      return redirect()->back()->with('saved', 'Successfully Saved Data');
      
    }
    public function addcat(Request $res){
      
      if($res->ajax()){
      
    $val = Validator::make($res->all(),[
        'slug' => 'required|unique:postmodels|unique:categorys'
        ]);
        if($val->passes()){
        categorys::create([
          'name' => $res->slug,
          'slug' => Str::slug($res->slug)
          ]);
        
      return response()->json([
          'data' => 'Successfully saved data'
          ]);
        }
        return response()->json([
          'error' => $val->errors()
          ]);
}
return 'no';
        
    }
    public function userdelete($id){
      
      $user = User::find($id);
$user->delete();  // This will soft delete the user
return back();
    }
 
}
