{{-- edit_user.blade.php file --}}

@extends('home_default')

@section('panel-heading')Edit User @stop

@section('panel-body')

	<form action="{{ url('update_user', $user->id) }}" method="POST" >
	   @method('PATCH')
	   @csrf
	   <input type="hidden" name="userid" value="{{ $user->id }}" >
	   
	   <input class="form-control" type="text"  name="name"   placeholder="name"    value="{{ $user->name }}" autofocus require="require" autocomplete="off"><br>
	   @error('name')
		<div class="alert alert-danger">{{ $message }}</div>
	  @enderror

	   <input class="form-control" type="email" name="email"  placeholder="email"   value="{{ $user->email }}" required="required"><br>
	   @error('email')
		<div class="alert alert-danger">{{ $message }}</div>
	   @enderror
	  <button class="btn btn-primary" type="submit" name="submit">Edit User</button>
	</form>
@stop