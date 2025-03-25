<x-nikhil>
   <x-slot name="title">{{ $cc->name }}</x-slot>
  <center><h1 style="color:green;">{{ $cc->name }}</h1></center>
   
  
  @foreach($cate as $cat)
   <div class="main">
     <img class="imgr" src="{{ url('/upload/'. $cat->file ) }}" alt="{{$cat->file}}" height="200" width="200">

     
  
 
   </div>
  @endforeach
  
</x-nikhil>