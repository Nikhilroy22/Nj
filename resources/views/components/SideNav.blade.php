<div class="modal" id="myModal">
  <span class="n2">
    
  <form action="{{ route('locale.change') }}" method="POST">
    @csrf
    <select name="locale" onchange="this.form.submit()">
        <option value="en"{{ app()->getLocale() == 'en' ? ' selected' : '' }}>English</option>
        
		<option value="bn"{{ app()->getLocale() == 'bn' ? ' selected' : '' }}>Bangla</option>
        <!-- Additional language options -->
    </select>
</form>
   <!-- <div class="head">
      @Auth
      {{ auth()->user()->name }}
      @endauth
      </div> -->
  <ol class="catnav">
     <il class="catlist {{ request()->is('load-more-data') ? 'active':'' }}"><a href="/load-more-data" wiree:navigate>Load-more-data</a></il>
     @Auth
    @if(auth()->user()->type == 1)
    <il class="catlist {{ request()->is('admin') ? 'active':'' }}"><a href="{{ url("/admin") }}">Admin Panel</a></il>
    
    @endif
     @endauth
     @auth
     @else
    <il class="catlist {{ request()->is('login') ? 'active':'' }}"><a href="/login">Login</a></il>
    <il class="catlist {{ request()->is('signup') ? 'active':'' }}"><a href="/signup">Sign Up</a></il>
    @endauth
    
    @foreach($cat as $cats)
    
    <il class="catlist {{ request()->is($cats->slug) ? 'active':'' }}"><a href="/{{ $cats->slug }}" wiree:navigate>{{ $cats->name }}</a></il>
   
    @endforeach
</ol>
    <span class="close">X</span>
</span>
</div>