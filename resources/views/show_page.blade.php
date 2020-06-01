{{-- show_page.blade.php file --}}

@extends('home_default')

@section('panel-heading')Show Posts @stop

@section('panel-body')
<div class="row">
  @foreach($pages as $page)
  <div class="col-sm-6 col-md-12">
    <div class="thumbnail">
      <div class="caption">
        <h2>{!! $page->title !!}</h2>
        <p>{!! $page->content !!}</p>
      </div>
    </div>
  </div>
 @endforeach
</div>
@stop