{{-- resources/views/items/partials/item-list.blade.php --}}
@foreach($items as $users)
    <div class="container">
   <div class="news-item">
    <img alt="Al Pacino at an event" height="100" src="{{ url('/upload/'. $users->file ) }}" width="100"/>
    <div class="news-content">
     <div>
      <span class="news-category">
       {{ $users->category }}
      </span>
      <span class="news-source">
       · {{ $users->postby }}
      </span>
     </div>
     <div class="news-title"><a href="/{{ $users->slug }}" wiree:navigate>
       {{ Str::limit($users->title, 70) }}
    
     </a>
     </div>
     <div class="news-meta">
      <span>
       <i class="fas fa-eye">
       </i>
       {{ $users->counts }}
      </span>
      <span>
       {{ $users->created_at->diffForHumans() }}
      </span>
     </div>
    </div>
   </div>
  
  </div>
@endforeach