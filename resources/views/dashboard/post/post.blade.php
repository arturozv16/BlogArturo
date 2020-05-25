

@extends('dashboard.master')

@section('content')
        

<form action="{{route("post.store")}}" method="post">      
    @include('dashboard/post/_form')
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