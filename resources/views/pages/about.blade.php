{{-- about.blade.php file --}}

@extends('pages.master')

@section('title')
About Page
@stop

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<h1>{!! $post->title !!}</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-justify">
				{!! $post->content !!}
		</div>
	</div>	

@stop




			

			