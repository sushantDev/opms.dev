@extends('admin.layout')

@section('user')
{{"Admin"}}
@endsection

@section('content')
        <!--overview start-->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Media</h3>
        <ol class="breadcrumb">
            <li><i class="icon_profile"></i><a href="index.html"> Media</a></li>
            <li><i class="fa fa-laptop"></i> media</li>
        </ol>
    </div>

</div>

@if($photos)

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th><i class="fa fa-laptop"></i> Name</th>
            <th><i class ="icon_calendar"></i> Created</th>
            <th><i class ="icon_calendar"></i> Updated</th>
            <th><i class="icon_cogs"></i> Action</th>
        </tr>
        </thead>
        <tbody>
        @if($photos)

            @foreach($photos as $photo)
                <tr>
                    <td>{{$photo->id}}</td>
                    <td><img height="100" src="{{$photo->file}}" alt=""></td>
                    <td>{{$photo->created_at->diffForhumans() ? $photo->created_at : "no file"}}</td>
                    <td>{{$photo->updated_at->diffForhumans()}}</td>
                    <td>


                        {!! Form::open(['method'=>'DELETE','action'=>['AdminMediasController@destroy', $photo->id]]) !!}



                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}



                        {!! Form::close() !!}

                    </td>

                </tr>
            @endforeach


        @endif
        </tbody>

    </table>
@endif
@endsection