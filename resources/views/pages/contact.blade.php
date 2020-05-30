{{-- contact.blade.php file --}}

@extends('pages.master')

@section('title')
Contact Page
@stop

@section('content')
	<h1>Contact </h1>

	    @if(session('success'))
				<div class="alert alert-danger">{{ session('success') }}</div>
		@endif

	
	<form  action="{{ url('contact') }}" method="POST">
		@csrf
		<div  class="form-group">
			<label>Name - required</label>
			<input class=" form-control @error('name') is-invalid @enderror" type="text"  id="name" name="name" required="required" >
		</div>

			@error('name')
			<div class="alert alert-danger">{{ $message }}</div>
			@enderror

		<div  class="form-group">
			<label>Email - required</label>
			<input class=" form-control @error('email') is-invalid @enderror" type="email" id="email" name="email"required="required" >
		</div>

			@error('email')
			<div class="alert alert-danger">{{ $message }}</div>
			@enderror

		<div  class="form-group">
			<label>Subject</label>
			<input  class="form-control" type="text" id="subject" name="subject">
	    </div>

	    <div  class="form-group">
			<label>Message</label>
			<textarea class="form-control" id="message" name="message" style="height: 300px;" ></textarea>
		</div>
		
		<div class="form-group">
			<button class="btn btn-primary btn-lg" type="submit">Send</button>
		</div>
	</form>
	
	
@stop




				
			
					
												
					
					
						
					
					
					
							
							
					
					
							
					
					
				
			