{{-- show_post.blade.php file --}}

@extends('home_default')

@section('panel-heading')Manage Posts @stop

@section('panel-body')
@if(session('success'))
<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Well done! </strong>{{ session('success') }}
</div>
@endif
<table id="posts" class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>POST</th>
      <th>AUTHOR</th>
      <th>Created Date</th>
      <th>Control</th>
    </tr>
  </thead>
  <tbody> 
     @foreach($posts as $post)
  <tr>
    <td>{{ $post->title }}</td>
    <td>{{ $post->user->name }}</td>
    <td>{{ $post->created_at }}</td>
    <td>
      <a href="{{ url('edit_post', $post->postID) }}" class="btn btn-primary btn-sm glyphicon glyphicon-edit"></a>
      <div style="display: inline-block;"> 
        <form action="{{ url('delete_post', $post->postID) }}" method="POST">
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
    $('#posts').DataTable();
  });
</script>
@stop




  
 
