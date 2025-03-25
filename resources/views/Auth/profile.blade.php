<x-nikhil>
  
  <div class="profile-container">
   <div class="pheader">
    <div class="user-info">
     <img alt="User profile picture" height="40" src="/profile.jpg" width="40"/>
    @auth
     <div>
      <div class="name">
       {{Auth::user()->name}}
      </div>
      <div class="tkbalance">
       {{Auth::user()->balance}} BDT
      </div>
     </div>
      @endauth
    </div>
    <div class="actions">
     <button class="my-bets">
      Follow
     </button>
     <button id="likebtn" class="deposit">
      Liked
     </button>
    </div>
   </div>
   
    <div class="pcontent">
       <div class="psection">
         <h3>Details</h3>
         <ul class="pul">
           
          <a href="/">
           <li>
       <i class="fas fa-history">
       </i>
       <span class="text">
        <a href="/bets" wiree:navigate>Bet history</a>
       </span>
      </li>
          </a>
          
           <a href="/">
           <li>
       <i class="fas fa-cog">
       </i>
       <span class="text">
        <a href="/bets" wiree:navigate>Setting</a>
       </span>
      </li>
          </a>
          
          <a href="/">
           <li>
       <i class="fas fa-exchange-alt">
       </i>
       <span class="text">
        <a href="/bets" wiree:navigate>Transaction History</a>
       </span>
      </li>
          </a>
           
 @auth<form method="post" action="logout">
  @csrf
  <button class="button"><i class="fas fa-sign-out-alt">
       </i> Logout</button>
         </form>@endauth
          
           

           
         </ul>
       </div>
      
      
      
    </div>
   
   
   
   </div>
  
  
</x-nikhil>