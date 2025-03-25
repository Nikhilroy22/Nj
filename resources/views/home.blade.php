<x-nikhil>

  <x-slot name="title">Nikhil Roy</x-slot>
 
  <div id="event"></div>
  
  <div style="padding: 10px 10px;">
@include('components/postlist')
  </div>
 
  {{ __('auth.failed') }}
  {{ __('nj.kalu') }}
  

 

  
  <script>
 
    const alertLib = new AlertLib();
    alertLib.showAlert("This is an info alert.", "info");
alertLib.showAlert("This is a success alert.", "success");
alertLib.showAlert("This is an error alert.", "error", 5000);
//alertLibrary.success("Operation completed successfully. nikhil");
  </script>
   
   
   @include('bet')
</x-nikhil>

