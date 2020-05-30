{{-- edit_post.blade.php file --}}

@extends('home_default')

@section('panel-heading')Edit Post @stop

@section('panel-body')
<form action="{{ url('update_post', $post->postID) }}" method="POST" enctype="multipart/form-data" >
	  @method('PATCH')
	  @csrf

   <input type="hidden" name="postid" value="{{ $post->postID }}" >

   <input class="form-control" type="text" name="title" placeholder="Title" required="required"  value="{{ $post->title }}" autofocus autocomplete="off"><br>
   @error('title')
		<div class="alert alert-danger">{{ $message }}</div>
	@enderror

   <textarea class="form-control" name="content" placeholder="Content" required="required" style="resize: vertical; height: 400px;">{{ $post->content }}</textarea><br>
    @error('content')
		<div class="alert alert-danger">{{ $message }}</div>
	@enderror

    <input  type="file" name="featured_image"  ><br>
    
   <button class="btn btn-primary" type="submit" name="submit">Edit Post</button>

</form>
@stop