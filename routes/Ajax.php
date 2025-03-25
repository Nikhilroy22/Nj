<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ajaxcontrolle;
use App\Models\Beting;
//Chatgpt
use GrokPHP\Laravel\Facades\GrokAI;
use GrokPHP\Client\Config\ChatOptions;
use GrokPHP\Client\Enums\Model;


Route::get('alogin', [ajaxcontrolle::class, 'login']);
Route::post('alogin',  [ajaxcontrolle::class, 'loginpost']);


Route::post('cloud',  [ajaxcontrolle::class, 'cloud']);


//<!-- Chatgpt -->
Route::get('chatgpt', function(){
  
return view('chatgpt');
});