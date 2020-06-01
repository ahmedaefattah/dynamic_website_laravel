{{-- home_default.blade.php file --}}

@extends('layouts.home_layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2><span class="glyphicon glyphicon-dashboard"></span> Dashboard <small>Manage your website.</small></h2> 
    </div>
  </div>
  <div class="row">
      <div class="col-md-12"><span>Welcome, {{ Auth::user()->name }} </span></div>
  </div>
  <div class="row">
        <div class="col-md-3" >
          <ul class="list-group">
            <li class="list-group-item"><a href="{{ url('create_post') }}">Create Post</a></li>
            <li class="list-group-item"><a href="{{ url('show_post') }}">Show Posts</a><span class="badge">{{ DB::table('posts')->where('post_type', 'post')->count() }}</span></li>
            <li class="list-group-item"><a href="{{ url('show_page') }}">Show Pages</a><span class="badge">{{ DB::table('posts')->where('post_type', 'page')->count() }}</span></li>
            <li class="list-group-item"><a href="{{ url('mng_posts') }}">Manage Posts</a></li>
            <li class="list-group-item"><a href="{{ url('create_user') }}">Create User</a></li>
            <li class="list-group-item"><a href="{{ url('mng_users') }}">Manage Users</a></li>
            <li class="list-group-item">

                 @guest
                    <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                   <div>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">Logout</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                    </form>
                   </div>
                  </li>       
                @endguest
          </ul>   
        </div> 
        <div class="col-md-9" >
          <div class="panel panel-default">
             <div class="panel-heading"> @yield('panel-heading')</div>
            <div class="panel-body" > @yield('panel-body')</div>
      
          </div>
        </div>
  </div>
</div>
@endsection