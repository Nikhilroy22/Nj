<x-nikhil>
  <h1>Login</h1>
  <form id="aall">
    @csrf
    <input type="text" id="aname" placeholder="Username">
    <br>
    <input type="text" id="apass" placeholder="password">
    <button id="alogin">login</button>
    
  </form>
  <script>
    $('#aall').on('submit', function(e){
  e.preventDefault();
      
      const nmmm = $('#aname').val();
      const nmpp = $('#apass').val();
      const tokenr = $('input[name="_token"]').val();
      $("#alogin").prop('disabled', true);
      
      $.ajax({
  type: 'post',
  url: '/alogin',
  data: {
    aname: nmmm,
    apass: nmpp,
    _token: tokenr
   
  },
  success: function(data){
    if(data.Login == 'login success'){
      console.log(data.Login)
   
   //  location.href = '/';
      
      Livewire.navigate('/')
    }
    $("#alogin").prop('disabled', false);
    console.log(data)
    
    
  },
  error: function(e){
    console.log(e.responseJSON.errors)
    
  },
  complete: function(data) {
    //console.log(data)
    
  }
      });
   
   
   
   
    });
   
  </script>
</x-nikhil>