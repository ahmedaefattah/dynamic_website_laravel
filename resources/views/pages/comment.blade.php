{{-- comment.blade.php file --}}
{{-- master.blade.php file --}}


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title')</title>

		<meta charset="utf-8">
		<!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Styles -->
		<link rel="stylesheet" type="text/css"  href="{{ asset('css/bootstrap.min.css') }}">
		<link type="text/css" rel="stylesheet"  href="{{ asset('css/style.css') }}">
	</head>

	<body>
			<div  class="container">
				<div class=" jumbotron header" >
					<a href="{{ url('/') }}"><h1>Site Name</h1></a>	
				</div>
			</div>

              <div class="container">
				<nav class="navbar navbar-inverse">
						<div class="navbar-header">
						      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						 </div>

						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav"  >
								<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
								<li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="{{ url('blog') }}">Blog</a></li>
								<li class="{{ Request::is('about') ? 'active' : '' }}" ><a href="{{ url('about') }}">About Us</a></li>
								<li class="{{ Request::is('contact') ? 'active' : '' }}" ><a href="{{ url('contact') }}">Contact</a></li>
								<li ><a href="{{ route('login') }}">Login</a></li>
					            <li ><a href="{{ route('register') }}">Register</a></li>
							</ul>
						</div>
						</nav>	
				</div>

		<div class="container"> 
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">

			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">
			      <div class="item active">
			        <img  src="{{ asset('images/html_image.png') }}" alt="html_image" style="width:100%;">
			      </div>

			      <div class="item">
			        <img src="{{ asset('images/css_image.png') }}" alt="css_image" style="width:100%;">
			      </div>
			    
			      <div class="item">
			        <img src="{{ asset('images/js_image.png') }}" alt="js_image" style="width:100%;">
			      </div>
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>

			  </div>
		</div>

			<div class="container">
				@yield('content')
			</div>

			<div class="container">
				@yield('comment')
			</div>
			<div class="container">
				@yield('showcomment')
			</div>
			

			<div class="container">
				<div class="footer text-center">
					<p>Copyright &copy; {{ date("Y") }}</p>
				</div>	
			</div>
	

		<!-- Scripts -->
		<script type="text/javascript" src="{{asset('js/jquery-3.5.1.min.js') }}"></script>
		<script type="text/javascript" src=" {{asset('js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

	</body>
</html>


		































			
			

