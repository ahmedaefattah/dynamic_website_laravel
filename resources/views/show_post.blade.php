{{-- show_post.blade.php file --}}

@extends('home_default')

@section('panel-heading')Show Posts @stop

@section('panel-body')
<div class="row">
  @foreach($posts as $post)
  <div class="col-sm-6 col-md-12">
    <div class="thumbnail">
      <div class="caption">
        <h2>{!! $post->title !!}</h2>
        <img  class="img-thumbnail" src="{{ asset('storage/'. $post->featured_image) }}" alt="post_img">
        <p>{!! $post->content !!}</p>
        <p><a href="{{ url('comments', $post->postID ) }}" class="btn btn-primary" role="button"> Show Comments</a></p>
      </div>
    </div>
  </div>
 @endforeach
</div>
@stop





