<?php

namespace App\Http\Controllers;
use App\Models\postmodel;
use App\Models\categorys;
use Illuminate\Http\Request;

class postview extends Controller
{
  public function postopen($slug){
 $data = postmodel::where('slug', $slug)->first();
    if ($data){
      $data->increment('counts');
     
      return view('viewpost', ['data' => $data]);
      
    }
    $cc = categorys::where('slug', $slug)->first();
    if($cc){
      $ppp = postmodel::where('category',$cc->slug)->get();
      return view('categoryview', ['cate' => $ppp,
      'cc' => $cc]);
    }
    return view('errors.404');
  }

  
}
