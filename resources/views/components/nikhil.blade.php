<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<title>@isset($title)
{{$title}}-@endisset Nikhil Roy</title>



 <link href="path/css/all.min.css" rel="stylesheet"/>
 <link href="{{ asset('assets/style.css') }}" rel="stylesheet" />
 
 
 
  <script src="{{ asset('/eruda/eruda.js') }}"></script>
<script>eruda.init();</script>

<script src="{{ asset('dist/jquery.min.js') }}"></script>
<script src="{{ asset('livewire.js') }}"></script>
<script src="{{ asset('llb.js') }}"></script>
 <script src="{{ asset('reverb.js') }}"></script>
 <script src="{{ asset('echo.js') }}"></script>
 <script src="{{ asset('assets/nikhil.js') }}"></script>
 
<style>
        /* Fullscreen Preloader */
        #preloader {
            position: fixed;
            width: 100%;
            height: 100%;
            background: white;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Loader Animation */
        .loader {
            width: 50px;
            height: 50px;
            border: 5px solid #3498db;
            border-top: 5px solid transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    </head>
    
      @include('components/NavBar')
      
    <body>
      
    <!-- Preloader 
    <div id="preloader">
        <div class="loader"></div>
    </div> -->
        {{ $slot }}
      
    </body>
       @include('components/footer')
    
    
    
    
      <script src="{{ asset('assets/menu.js') }}" defer></script>
      <script>
    /*    $(window).on('load', function () {
    $('#preloader').fadeOut(500);
    $('#content').fadeIn(500);
});
        */
      </script>
     
</html>
