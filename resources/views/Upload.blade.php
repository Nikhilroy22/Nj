<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 File Upload using jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <script src="/eruda/eruda.js"></script>
<script>eruda.init();</script>
      <script src="{{ asset('dist/jquery.min.js') }}"></script>
      <style>
      body{
        
      }
      .imgr{
        
  border-radius: 6px;
  height: 120px;
  width: 120px;
}
.imgrr{
        display: none;
  border-radius: 6px;
  height: 320px;
  width: 320px;
}
        p{
          color: red;
        }
        .kkkk{
          display: none;
          font-weight: bold;
          color: green;
        }
      </style>
</head>
<body>

    <h2>File Upload</h2>
    <img class="imgrr" src="" id="shimg">
   <div id="loading" class="kkkk">uploading..</div>
    <form id="fileUploadForm" enctype="multipart/form-data">
      @csrf
        <input type="file" name="file" id="file">
        <p id="file_error"></p>
        
        <input type="text" placeholder="kichu likho" name="name">
        <p id="name_error"></p>
        
        <button type="submit" id="dis">Upload</button>
    </form>
    
    <script>
    $('#file').on('change', function(e){
      $('.imgrr').show();
      const img = e.target.files[0];
      $('#shimg').attr('src', URL.createObjectURL(img))
      console.log(URL)
    });
       
            $('#fileUploadForm').on('submit', function(e) {
                e.preventDefault();
                $("#loading").show();
                const token = $('input[name="_token"]').val();
                let formData = new FormData(this);
              $("#dis").prop('disabled', true).css({"color": 'green', "background-color": 'green'});
                console.log(formData);
                
                $.ajax({
                    url: '{{ route('newbngg') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                   processData: false,
                    
                    success: function(data) {
                      console.log(data);
                     $("#loading").hide();
                      
                      $(`#name_error`).text('');
                        $('#fileUploadForm')[0].reset();
                        $('.imgrr').hide();
                          alert(data.success);
                       
                        
                    },
                    error: function(error) {
                      $('#name_error').text('');
                $('#file_error').text('');
                         $("#loading").hide();
                         $.each(error.responseJSON.errors, function(key, user) {
                           
                           
                           if(user){
            $(`#${key}_error`).text(user);
               
                           }else{
                              $(`#${key}_error`).text('');
                             
                           }    
            });
                        
                    },
                    complete: function(){
                      
                       $("#dis").prop('disabled', false);
                   $('#dis').css().reset();
                    },
                });
            });
            
              
      
      //console.log(URL.createObjectURL('jjj'));
      
    </script>
    
    <br>
    @foreach($data as $kkk)
   <img class="imgr" src="upload/{{ $kkk->file }}" alt="image">
    <h1>{{ $kkk->name }}</h1>
    <br>
    @endforeach
<h1 id="klop">Remove</h1>
</body>
<script>
  $('#klop').on('click', function(){
    ///alert('delete')
    $(this).remove();
    
  });
  
  
</script>
</html>