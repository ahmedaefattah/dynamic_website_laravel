{{-- create_post.blade.php file --}}

@extends('home_default')

@section('panel-heading')Create Post @stop

@section('panel-body') 
<form action="{{ url('create_post') }}" method="POST" enctype="multipart/form-data" >
   @csrf
   <input class="form-control" type="text" name="title" placeholder="Title" autofocus required="required" autocomplete="off"><br>

	@error('title')
		<div class="alert alert-danger">{{ $message }}</div>
	@enderror

   <textarea class="form-control" name="content" placeholder="Content" required="required" style="resize: vertical;height: 400px;"></textarea><br>
   @error('content')
		<div class="alert alert-danger">{{ $message }}</div>
	@enderror
	
   <input  type="file" name="featured_image" ><br>

   <button   class="btn btn-primary" type="submit" name="submit">Create Post</button>
</form>
@stop



