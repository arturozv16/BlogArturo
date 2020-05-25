@extends('dashboard.master')

@section('content')
        

<form action="{{route("post.update", $post->id)}}" method="POST"> 
    @method('PUT')     
    @include('dashboard/post/_form')
</form>
<br>
<form action="{{route("post.image", $post)}}" method="POST" enctype="multipart/form-data"> 
    @csrf
        {{--
        <div class="row">
        <div class="col">
            <input type="file" name="image" class="form-control">
        </div>
        <div class="col">
            <button class="btn btn-secondary" type="submit">Subir</button>
        </div>
    </div> --}}
    <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="image" id="inputGroupFile04">
          <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
        </div>
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit">Button</button>
        </div>
      </div>
</form>

@endsection