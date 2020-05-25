

@extends('dashboard.master')

@section('content')
        

<form action="{{route("categories.store")}}" method="post">      
    @include('dashboard/categories/_form')
</form>
@endsection
