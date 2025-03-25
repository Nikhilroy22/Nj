<?php
//middleware
use App\Http\Middleware\Adminauth;
use App\Models\User;
use App\Events\TestEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\admincontroller;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\FileUploadController;

Route::get('admin', [admincontroller::class, 'index'])->middleware(Adminauth::class);

//Ajax uploadd
Route::get('/uploadd', [FileUploadController::class, 'index']);
Route::post('/upppp', [FileUploadController::class, 'store'])->name('newbngg');


// Send Money
Route::get('admin/send-money', [TransactionController::class, 'create'])->name('send.money.form');
Route::post('/send-money', [TransactionController::class, 'store'])->name('send.money');

// Admin Post

Route::get('admin/addpost', [admincontroller::class, 'addpostview']);
Route::post('admin/addpost', [admincontroller::class, 'addpost']);

Route::post('admin/catadd', [admincontroller::class, 'addcat'])->name('addcat');
//User delete
Route::get('user/delete/{id}', [admincontroller::class, 'userdelete'])->name('userdel');
// Reverb

Route::get('reverb/{kk}', function($kk){
  $nikhil = User::all();
  event(new TestEvent($nikhil));
  dd($kk);
  
});
// Jquery upload
Route::get('/kalu', function(){
  $nikhil = User::all();
  return response()->json($nikhil);
  
});
