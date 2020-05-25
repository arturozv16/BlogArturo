@extends('dashboard.master')

@section('content')
        

<form action="{{route("categories.update", $categories->id)}}" method="POST"> 
    @method('PUT')     
    @include('dashboard/categories/_form')
</form>
<br>


@endsection