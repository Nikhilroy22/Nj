<x-admin.adminlayout>
<h1><center>Add Post</center></h1>


<form method="post" action="{{ url("/admin/addpost") }}" class="kk" enctype="multipart/form-data">
  
  @if(session('saved'))
<span class="saved">{{session('saved')}}</span>
@endif
  
  @csrf
  <select class="select" name="category">
    <option value="" disabled selected>select category</option>
    @foreach($sss as $pp)
    <option value="{{$pp->slug}}">{{$pp->name}}</option>
    @endforeach
    </select>
    @error('category')
    <p>{{ $message }}</p>
    @enderror
    <input name="slug" class="select" type="text" placeholder="title" value="{{old('slug')}}">
    @error('slug')
    <p>{{ $message }}</p>
    @enderror
    
    <textarea name="body" class="textarea" placeholder="nikhil"></textarea>
    @error('body')
    <p>{{ $message }}</p>
    @enderror
    
    <input class="select" type="file" name="file">
    @error('file')
    <p>{{ $message }}</p>
    @enderror
   <button class="button">Add Post</button>
    </form>
</x-admin.adminlayout>
  
  

