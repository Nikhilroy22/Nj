  @auth
 
  
   <footer>
    <div class="nav">
      
      
      
     
     
     
     <a href="/" class="nav-link link-active" wiree:navigate>
     <i class="fas fa-home {{ request()->is('/') ? 'hrcc':'' }}" style="font-size:26px;"></i>
     <div>home</div>
    
      </a>
      
      <a href="/send-money" class="nav-link link-active" wiree:navigate>
        <i class="fas fa-book {{ request()->is('send-money') ? 'hrcc':'' }}" style="font-size:26px;"></i>
        <div>News</div>
      </a>
        
     
      
      
       <a href="{{ route('add.post') }}" class="nav-link link-active" wiree:navigate>
        <i class="fas fa-plus {{ request()->is('add_post') ? 'hrcc':'' }}" style="font-size:26px;"></i>
        <div>Add Post</div>
      </a>
      
      
       <a href="/profile" class="nav-link link-active" wiree:navigate>
       <i class="fas fa-user-circle {{ request()->is('profile') ? 'hrcc':'' }}" style="font-size:26px;"></i>
       <div>profile</div>
      </a>
      
      
    </div>
    
    
  </footer>
  @endauth