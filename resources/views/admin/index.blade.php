<x-admin.adminlayout>
 

<form class="kk" id="addcat">
  @csrf
  <input class="select" id="catss" type="text" placeholder="Type Category Name">
  <span id="errms" class="error"></span>
  <button class="btn" id="button">Add Category</button>
</form>
<h1 id="saved" class="saved"></h1>
<h1 id="logg"></h1>




   <style>
      tb {
    
    margin-left: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
}

    </style>
    <tb>
    
    <table border="1" id="dataTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
    @foreach($user as $users)
          <tr>
            
          <td>{{ $users->id }}</td>
          <td>{{ $users->name }}</td>
          <td>{{ $users->email }}</td>
          <td><a href="/user/delete/{{ $users->id }}" style="color:red;">Delete</a></td>
          </tr>
@endforeach
        </tbody>
        </table>
    </tb>
 



<script>
  
  
$('#addcat').on('submit', function(e){
  e.preventDefault();
  
  const token = $('input[name="_token"]').val();
  const cats = $('#catss').val();
  document.getElementById("button").disabled = true;
   //$('#button').prop();
   
$.ajax({
  type: 'post',
  url: '{{ route('addcat') }}',
  data: {
    slug: cats,
    _token: token
  },
  success: function(data){
    $('#button').show();
    if(data.data){
      $('#catss').val('');
       $('#errms').text('');
      document.getElementById("button").disabled = false;
      $('#saved').text(data.data);
   // alert(data.data);
    }else{
      document.getElementById("button").disabled = false;
      $('#errms').text(data.error.slug[0]);
      $('#saved').text('');
    }
   // location.href = '/';
  },
  
  
  
  
});

});

</script>

</x-admin.adminlayout>
  
  

