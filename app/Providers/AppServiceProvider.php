<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\categorys;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
   /*      
if (strpos($_SERVER['REQUEST_URI'], '/index.php') !== false) {
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (!empty($url)) {
        $url = str_replace('/index.php', '', $url);
        header('Location: ' . $url);
        exit();
    }
}
    */  
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
     
      
   $cat = categorys::all();
    //  $kalu = 'http://localhost:8000/databb';
        View::share('cat', $cat);
    
    }
}
