@extends('Layouts.app')

@section('content')



    <h1> Contact Page..</h1>

    @if(count($people))
        <ul>
        @foreach($people as $person)

            <li> {{$person}}</li>

        @endforeach
        </ul>

    @endif



@stop

@section('footer')
    <h3>All right Reserved .. SUSHANT SAPKOTA</h3>
@stop