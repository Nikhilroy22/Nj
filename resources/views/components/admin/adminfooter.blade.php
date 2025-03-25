  @auth
 
  
   <footer>
    <div class="nav">
      
      
      
     
     
     
     <a href="/admin" class="nav-link link-active" wiree:navigate>
     <i class="fas fa-home {{ request()->is('admin') ? 'hrcc':'' }}" style="font-size:26px;"></i>
     <div>home</div>
    
      </a>
      
      
        <a href="/meg" class="nav-link" wiree:navigate>
         <div class="msiicon">
           
     <i class="fas fa-envelope" style="font-size:26px;"></i> 
     <span class="msibadge">
       8
      </span>
     
         </div>
         <div>Bets</div>
     
       </a>
     
      
      
       <a href="/admin/send-money" class="nav-link link-active" wiree:navigate>
        <i class="fas fa-comments-dollar {{ request()->is('send-money') ? 'hrcc':'' }}" style="font-size:26px;"></i>
        <div>Send Money</div>
      </a>
      
      
       <a href="/profile" class="nav-link link-active" wiree:navigate>
       <i class="fas fa-user-circle {{ request()->is('profile') ? 'hrcc':'' }}" style="font-size:26px;"></i>
       <div>Setting</div>
      </a>
      
      
    </div>
    
    
  </footer>
  @endauth