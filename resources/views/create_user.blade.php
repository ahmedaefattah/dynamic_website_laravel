{{-- create_user.blade.php file --}}

@extends('home_default')

@section('panel-heading')Create User @stop

@section('panel-body')
<form  action="{{ url('create_user') }}" method="POST">
	@csrf
	<input class="form-control" type="text"     name="name"    placeholder="Name"     autofocus required="required" autocomplete="off"><br>
	@error('name')
		<div class="alert alert-danger">{{ $message }}</div>
	@enderror

	<input class="form-control" type="email"    name="email"   placeholder="Email" required="required"  ><br>
	@error('email')
		<div class="alert alert-danger">{{ $message }}</div>
	@enderror

	<input class="form-control" type="password" name="password" placeholder="Password" required="required"  ><br>
	@error('password')
		<div class="alert alert-danger">{{ $message }}</div>
	@enderror

	<button class="btn btn-primary" type="submit" name="submit">Create User</button>
</form>
@stop

