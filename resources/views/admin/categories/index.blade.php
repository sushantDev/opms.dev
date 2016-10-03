@extends('admin.layout')

@section('user')
{{"Admin"}}
@endsection

@section('content')
        <!--overview start-->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Categories</h3>
        <ol class="breadcrumb">
            <li><i class="icon_profile"></i><a href="index.html"> Categories</a></li>
            <li><i class="fa fa-laptop"></i> All Categories</li>
        </ol>
    </div>

</div>

<div class="col-sm-6">
<div class="row">

        <section class="panel">
            <header class="panel-heading">
                Create Category
            </header>
            <div class="panel-body">

                {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store'],['class'=>'form-horizontal']) !!}
                    <div class="form-group">

                        {!! Form::label('name','Name:',['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="panel-body">

                        {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
                    </div>


                {!! Form::close() !!}
            </div>
        </section>
</div>

</div>

<div class="col-sm-6">

    @if($categories)
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th><i class="icon_plus_alt2"></i> Name</th>
                <th><i class ="icon_calendar"></i> Created at</th>
                <th><i class="icon_cogs"></i> Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no date'}}</td>
                    <td><div class="btn-group">
                            <a class="btn btn-primary" href="{{route('admin.categories.edit', $category->id)}}"> <i class="icon_plus_alt2"></i> </a>

                            <a class="btn btn-danger" href="{{route('admin.categories.edit', $category->id)}}"> <i class="icon_close_alt2"></i> </a>
                        </div></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

</div>

@endsection