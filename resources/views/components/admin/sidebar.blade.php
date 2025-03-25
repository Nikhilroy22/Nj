<div class="modal" id="myModal">
  <span class="n2">
  <ol class="catnav">
    
    <il class="catlist">
      <a href="/" class="fas fa-eye"> View</a></il>
    
    <il class="catlist">
      <a href="/admin/addpost" class="fas fa-plus {{ request()->is('admin/addpost') ? 'active':'' }}"> Add Post</a></il>
    
    <il class="catlist">
      <a href="/admin/addpost" class="fas fa-plus {{ request()->is('admin/addpost') ? 'active':'' }}"> Add Category</a></il>
    
</ol>
    <span class="close">X</span>
</span>
</div>