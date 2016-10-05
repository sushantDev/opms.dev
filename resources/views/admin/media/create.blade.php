@extends('admin.layout')

@section('user')
{{"Admin"}}
@endsection


@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css" class="css">

@endsection

@section('content')
        <!--overview start-->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Media</h3>
        <ol class="breadcrumb">
            <li><i class="icon_profile"></i><a href="index.html"> Media</a></li>
            <li><i class="fa fa-laptop"></i>Upload Media</li>
        </ol>
    </div>

</div>


    {!! Form::open(['method'=>'POST','action'=>'AdminMediasController@store','class'=>'dropzone']) !!}


    {!! Form::close() !!}



@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>

@endsection