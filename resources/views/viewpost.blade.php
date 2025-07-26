<x-nikhil>
   <x-slot name="title">{{ $data->title }}</x-slot>
 
 @if( url()->previous() == asset($data->slug))
 <h1>not back</h1>
 @else
  <h1><a href="{{ url()->previous() }}" wiree:navigate>Back</a></h1>
 @endif
 
  <style>
  
        .container {
            padding: 20px;
        }
        .header {
            display: flex;
            align-items: center;
        }
        .header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .header .info {
            margin-left: 10px;
        }
        .header .info .name {
            font-weight: bold;
            font-size: 16px;
        }
        .header .info .details {
            color: #888888;
            font-size: 14px;
        }
        .header .options {
            margin-left: auto;
            color: #888888;
            cursor: pointer;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 10px;
        }
        .postbody{
          margin-top: 15px;
          font-size: 20px;
        }
  </style>
 
 <div class="container">
   <div class="header">
    <img alt="image" height="40" src="{{ url("/profile.jpg") }}" width="40"/>
    <div class="info">
     <div class="name">
      Nikhil Roy
     </div>
     <div class="details">
       {{ $data->created_at->diffForHumans() }}
     </div>
    </div>
    <div class="options">
     <i class="fas fa-ellipsis-h" id="menupost">
     </i>
    </div>
   </div>
   <div class="title">
   {{ $data->title}}
   </div>
 
 <div class="postbody">
   {!!$data->body!!} kk</div>
  </div>
  <script>
    $('#menupost').on('click', function(){
      $('#modalshow').show();
    })
    window.addEventListener('click', function(e){
    var btnn = document.getElementById("modalshow");
      if (e.target == btnn) {
    btnn.style.display = "none";
   
  }
      
    });
  </script>
  @include('components/modal')
</x-nikhil>