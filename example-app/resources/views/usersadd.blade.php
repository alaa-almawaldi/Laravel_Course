@extends('layout.nav')
<h1>hello user</h1>
@section('title')
    users
@endsection
@section('content')
    <h2>users page</h2>
@endsection
@section('sidebar')
    @parent
    parent + addition.
@stop
