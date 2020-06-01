{{-- mng_users.blade.php file --}}

@extends('home_default')

@section('panel-heading')Manage Users @stop

@section('panel-body')
@if(session('success'))
<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Well done! </strong>{{ session('success') }}
</div>
@endif
<table id="users" class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>User</th>
       <th>Email</th>
      <th>Created Date</th>
      <th>Control</th>
    </tr>
  </thead>
  <tbody>  
@foreach($users as $user)
 <tr>
    <td>{{ $user->name}}</td>
    <td>{{ $user->email}}</td>
    <td>{{ $user->created_at}}</td>
    <td>
      <a href="{{ url('edit_user', $user->id) }}" class="btn btn-primary btn-sm glyphicon glyphicon-edit"></a>
      <div style="display: inline-block;"> 
        <form action="{{ url('delete_user', $user->id) }}" method="POST">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm" ><span class="glyphicon glyphicon-trash"></span></button>  
        </form> 
      </div>
      
    </td>
  </tr> 
  @endforeach
   </tbody>
</table>
 
<script type="text/javascript">
  $(document).ready(function() {
    $('#users').DataTable();
  });
</script>
@stop




 

 