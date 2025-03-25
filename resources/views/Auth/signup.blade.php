<x-nikhil>
 @if(session('success'))
 <center>{{session('success')}}</center>
 @endif
   <form method="post" action="signup" class="form-container">
     @csrf
    <h1>Sign Up</h1>
    <input type="text" name="username" placeholder="Username" class="input-form"/>
     <p>@error('username')
  {{ $message }}
  @enderror</p>
    <input type="text" name="name" placeholder="Name" class="input-form"/>
     <p>@error('name')
  {{ $message }}
  @enderror</p>
    <input type="text" name="email" placeholder="email" class="input-form"/>
     <p>@error('email')
  {{ $message }}
  @enderror</p>
    <input type="text" name="password" placeholder="Password" class="input-form"/>
     <p>@error('password')
  {{ $message }}
  @enderror</p>
    <button class="button">Sign Up</button>
  </form>
   <u class="wrap">Already registered?  
  <a href="{{ route('login') }}"> Login</a>
  </u>

</x-nikhil>