{{-- blog.blade.php file --}}

@extends('pages.master')

@section('title')
BlogPage
@stop

@section('content')
@foreach($posts as $post)
<div class="row">
	<div class="col-sm-12">
		<a href="{{ url('post', $post->postID ) }}" ><h1 id="{{ $post->postID }}">{!! $post->title !!} </h1></a>
		<h4><small><i>by Admin, {{ date('M d, Y h:i A', strtotime($post->created_at)) }}</i></small></h4>
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


@endforeach
@stop



		
			



					
				
			

		
			
					
			
		