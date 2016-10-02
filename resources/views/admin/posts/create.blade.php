@extends('admin.layout')

@section('user')
{{"Admin"}}
@endsection

@section('content')
        <!--overview start-->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Posts</h3>
        <ol class="breadcrumb">
            <li><i class="icon_profile"></i><a href="index.html"> Posts</a></li>
            <li><i class="fa fa-laptop"></i> Create Posts</li>
        </ol>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Create Posts
                </header>
                <div class="panel-body">

                    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true],['class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            {!! Form::label('title','Title:',['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                                </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('category_id','Category:',['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::select('category_id',[''=> 'Choose Categories'] + $categories, null, ['class'=>'form-control']) !!}
                                </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('photo_id','photo:',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::file('photo_id',['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('body','Description:',['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                                </div>
                        </div>

                        <div class="panel-body">

                            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
                        </div>


                    {!! Form::close() !!}

                    @include('includes.form_error')

                </div>
            </section>
    </div>

</div>

@endsection