@extends('dashboard.master')
@section('content')
<a href="{{route('post.create')}}" class="btn btn-success mt-5 mb-5" >Crear</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Posted</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td>{{$post->posted}}</td>
        <td>{{$post->created_at->format('d-m-Y')}}</td>
        <td>{{$post->updated_at->format('d-m-Y')}}</td>
        <td>
      <a href="{{route('post.show', $post->id)}}" class="btn btn-primary">Ver</a>
      <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary">Edit</a>
      <button data-toggle="modal" data-target="#deleteModal" data-id="{{$post->id}}" class="btn btn-danger" type="submit">Delete</button>
        </td>
    </tr>
        @endforeach
      
    </tbody>
  </table>

  
   
{{$posts->links()}}


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de eliminar el registro?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form id="formDelete" action="{{route('post.destroy', 0)}}" data-action="{{route('post.destroy', 0)}}" method="post">
          @csrf
          @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>

      </div>
    </div>
  </div>
</div>

<script>
  $('#deleteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  action =$('#formDelete').attr('data-action').slice(0, -1);
  action += id;

  $('#formDelete').attr('action', action);

  var modal = $(this)
  modal.find('.modal-title').text('Eliminar el registro ' + id)
  
})
</script>


@endsection