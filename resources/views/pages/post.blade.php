{{-- post.blade.php file --}}

@extends('pages.comment')

@section('title')
Post Page
@stop

@section('content')
<div class="row">
        <div class="col-sm-12">
        <h1>{!! $post->title !!} </h1>
        </div>
</div>
   
<div class="row">
    <div class="col-md-12">
    <img class=" img-responsive img-thumbnail" src="{{ asset('storage/'. $post->featured_image) }}" alt="featured_image" style="width:100%;height: 300px">
    </div>
 </div>
        
<div class="row">
    <div class="col-sm-12 text-justify">
        {!! $post->content !!}                  
    </div>
</div>      
@stop

    



    



@section('comment')
 <h1>Leave Comment</h1>
 
<form action="{{ url('post') }}" method="POST">
   @csrf
    <input type="hidden" id="postID" name="postID" value="{{ $post->postID }}">

    <div  class="form-group">
        <input class="form-control" type="text" id="name" name="name" placeholder="Name" >
    </div>

	<div  class="form-group">
        <input  class="form-control" type="email" id="email" name="email" placeholder="Email" >
    </div>
		
    <div  class="form-group">
          <textarea class=" form-control  @error('email') is-invalid @enderror"  id="comment" name="comment" placeholder="Comment" required="required"  ></textarea><br>
    </div>
        @error('comment')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    <div  class="form-group">
         <button class="btn btn-primary btn-lg" type="submit" name="submit">Add Comment</button>
    </div>
   
</form>
 
@stop

@section('showcomment')
 
 @foreach( $comments as $comment)
  <div class="media">
    <div class="media-left">
      <img src="{{ url('images/img_avatar1.png') }} " class="media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">{{ $comment->name }}<small><i> {{ $comment->created_at }}</i></small></h4>
       <p>{{ $comment->comment }}</p>
   </div>   
 </div>    
 @endforeach
@stop






  
 
      
   







