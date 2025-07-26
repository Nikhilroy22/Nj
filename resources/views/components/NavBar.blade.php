<nav>
 
        <div class="nav-container">
          
            <span class="logo"><a href="{{ url("/") }}" wiree:navigate>Nik<span>Jil</span></a></span>
            
           <ul class="nav--ul__two">
             @auth
          <!--      <span class="balance" id="taka56">{{ Auth::user()->balance }} BDT</span> -->
          <span id="serchbar"> <i class="fas fa-search" style="font-size:26px;"></i></span>
                  @include('components/Search')
                @else
                    <span class="balance"><a href="{{ url("/login") }}" wiree:navigate>Login</a></span>
                    <span class="balance"><a href="{{ url("/signup") }}">Signup</a></span>
                    @endauth 
                 <span id="openmenu" class="mmm" style="font-size:25px;cursor:pointer;" >&#9776;</span> 
                </ul>
        </div>
</nav>
      

@include('components/SideNav')
