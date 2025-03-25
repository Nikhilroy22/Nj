<?php

namespace App\Http\Controllers;
use Nikhil\Nikhilroy;
use Illuminate\Http\Request;
use App\Models\postmodel;
use App\Models\categorys;
use Illuminate\Support\Carbon;

class homecontroller extends Controller
{
 
  public function index(Request $request){
    
     $userr = postmodel::orderBy('created_at', 'desc')->latest()->get();
  $cat = categorys::all();
/*  if(Carbon::now()->format('H') >= 11 && Carbon::now()->format('H') <= 18){ return 'kalu'; 
    
  }
  else { 
  
  } */
  return view('home', ['user' => $userr,
  'cats' => $cat]);
/*  $kk = new Nikhilroy();
  return $kk->pujabd(function (){
    echo 'kkk janu';
  }); */

   
  }
  
 public function loadMoreData(Request $request)
{
    $page = $request->get('page', 1);
    $items = postmodel::paginate(2, ['*'], 'page', $page);

    if ($request->ajax()) {
        $view = view('items.partials.item-list', compact('items'))->render();
        return $view;
    }

    return view('items.index', compact('items'));
}
  
}
