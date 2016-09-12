@extends('Layouts.app')

@section('content')
    <h1> Post Page.. {{$id}}
    {{$name}}
    {{$pass}}</h1>
@stop

@section('footer')
    <h3>All right Reserved .. SUSHANT SAPKOTA</h3>
@stop

@section('js')
    <script> alert("Hello There!!");</script>
@stop