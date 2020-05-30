{{-- mng_comments.blade.php file --}}

@extends('home_default')

@section('panel-heading')Mange Comments @stop

@section('panel-body')
@if(session('success'))
<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Well done! </strong>{{ session('success') }}
</div>
@endif
<table class="table table-bordered table-hover">
  <thead>
    <tr>
     <th>Comment</th>
     <th>Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($comments as $comment)
<tr>
  <td>{{ $comment->comment }}</td>
  <td>
    <form action="{{ url('delete_comment', $comment->commentID) }}" method="POST">
        <button type="submit" class="btn btn-danger btn-sm" ><span class="glyphicon glyphicon-trash"></span></button>
        @method('delete')
        @csrf
     </form>
  </td>
</tr> 
@endforeach
</tbody>
</table>
@stop




  
 
    
 
 