{{-- index.blade.php file --}}

@extends('pages.master')

@section('title')
Home Page
@stop

@section('content')
@foreach($posts as $post)

<div class="row">
	<div class="col-sm-12">
		<h1 >{!! $post->title !!} </h1>
		<h4><small><i>by {{$post->user->name}}, {{ date('M d, Y h:i A', strtotime($post->created_at)) }}</i></small></h4>
	</div>
</div>
<div class="row">
	<div class="col-sm-9 text-justify">
		<p>{!! substr($post->content,0,836) !!}
			<a href="{{url('blog') }}" style="color: navy;"> &gt&gt</a>
		</p>	
	</div>
  	<div class="col-sm-3">
		<img  class="img-thumbnail" src="{{ asset('storage/'. $post->featured_image) }}" alt="featured_imag">
	</div>
</div>
  	
@endforeach
@stop




				
				
				

				
			

				
						
		

