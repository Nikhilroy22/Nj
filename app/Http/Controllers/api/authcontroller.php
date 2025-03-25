<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Validator;

class authcontroller extends Controller
{
  public function signup(Request $res){
    $validator = validator::make($res->all(), [
      'name' => 'required',
      'username' => 'required',
      'email' => 'required|unique:users,email',
      'password' => 'required',
      ]);
      if($validator->fails()){
        
        return response()->json($validator->messages(), 422);
        
      }
    $input = $res->all();
      $input['password'] = bcrypt($input['password']);
      $user = User::create($input);
  $success['token'] = $user->createToken('MyApp')->plainTextToken;
      $success['name'] = $user->name;
      
      return response()->json([
            'success' => true,
            'data' => $success,
            'message' => 'add succes reg'
        ],200);
  }
  public function login(Request $request){
  $validator = validator::make($request->all(), [
      'username' => 'required',
      'password' => 'required',
  
  ]);
   if($validator->fails()){
        
        return response()->json($validator->errors()->first());
        
      }
      
      return response()->json(['success' => 'success']);
      
      
  /* if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
        $user = Auth::User();
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
      $success['name'] = $user->name;
      
      return response()->json([
            'success' => true,
            'token' => $success['token'],
            'data' => $success,
            'message' => 'succes login'
        ],200);
      }else{
        
        return response()->json([
            'success' => false,
            
            'message' => 'faild login'
        ],401);
        
      }
      
      */
    }
}
