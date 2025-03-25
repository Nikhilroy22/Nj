<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin page panel</title>
       <link href="{{ asset('adminn/admin.css') }}" rel="stylesheet" />
 <link href="{{asset('path/css/all.min.css')}}" rel="stylesheet"/>
       
       
  <script src="{{ asset('/eruda/eruda.js') }}"></script>
<script>eruda.init();</script>


        <script src="{{ asset('dist/jquery.min.js') }}"></script>
        <script src="{{ asset('adminn/admin.js') }}"></script>
       
      
    </head>
    @include('components/admin/adminheader')
    <body>
      
        {{ $slot }}
     
    </body>
     @include('components/admin/adminfooter')
        <script src="{{ asset('adminn/sidebar.js') }}"></script>
</html>
