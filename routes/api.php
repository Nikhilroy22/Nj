<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ajaxcontrolle;

use App\Http\Controllers\api\authcontroller;
use App\Models\Upload;

use App\Http\Middleware\CheckApiKey;
 

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/databb', function(){
  $nikhil = Upload::all();
  return response()->json('databb success');
  
})->middleware(CheckApiKey::class)->name('fetchdata');



Route::get('nikhil', [nikhil::class, 'index']);



// Auth
Route::post('signup', [authcontroller::class, 'signup']);
Route::post('login', [authcontroller::class, 'login']);




//ajax


// Beting
Route::get('njbet', function(){
  return response()->json(['nei' => 'beting place']);
});

Route::get('njpuja', function(){
$kkk = Upload::orderBy('created_at', 'desc')->get();
  return response()->json($kkk);
});


Route::post('input', function(Request $kik){
  $sender = auth()->user();
  $kkk = new Upload();
  $kkk->name  = $kik->name;
  $kkk->file  = $kik->file;
  $kkk->save();
  return response()->json(['ktha'=>'success']);
  
});
Route::get('input/delete/{id}', function($id){
  $kkk = Upload::find($id)->delete();
 
  return response()->json('delete data');
  
});