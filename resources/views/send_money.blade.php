<x-admin.adminlayout>
<!---  @auth
<form method="post" action="logout">
  @csrf
  <button>Logout</button>
</form>
@endauth
  
  <br>
  -->
@if(session('err'))
<span style="color: red;">{{session('err')}}</span>
@endif
  
<form class="kk" action="{{ route('send.money') }}" method="POST">
  
  @if(session('success'))
<span class="saved">{{session('success')}}</span>
@endif
  
    @csrf
    <div>
        <label for="receiver_id">Receiver (User ID):</label>
        <input class="select" type="number" name="receiver_id">
        @error('receiver_id')
        {{ $message }}
        @enderror
    </div>
    <div>
        <label for="amount">Amount:</label>
        <input class="select" type="number" step="0.01" name="amount">
         @error('amount')
        {{ $message }}
        @enderror
    </div>
    <button class="button" type="submit">Send Money</button>
</form>

</x-admin.adminlayout>
