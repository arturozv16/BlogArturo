

@extends('dashboard.master')

@section('content')
        

<form action="{{route("categories.store")}}" method="post">      
    @csrf
    <div class="form-group"> 
    <label for="title">Título</label>
          {{-- <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"> --}}
          <input disabled type="text" class="form-control" name="title" id="title" value="{{$categories->title}}">
    </div>
       <div class="form-group">
                  <label for="url_clean">Url Limpia</label>
         <input disabled type="text" class="form-control" name="url_clean" id="url_clean" value="{{$categories->url_clean}}">
               </div>
               

</form>
@endsection
<?php
/*


@error('title')
   <div class="alert alert-danger">{{$message}}</div> 
@enderror
@error('url_clean')
   <div class="alert alert-danger">{{$message}}</div> 
@enderror
@error('content')
   <div class="alert alert-danger">{{$message}}</div> 
@enderror
</div>
@endsection

*/
?>