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
            <li><i class="fa fa-laptop"></i> Edit Posts</li>
        </ol>
    </div>

    <div class="panel-body">
        <div class="col-lg-2 col-sm-2">
            <div class="follow-ava">

                <img src="{{$post->photo ? $post->photo->file : 'http://www.buira.org/assets/images/shared/default-profile.png' }}" alt="" class="img-responsive img-rounded">

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Edit Posts
                </header>
                <div class="panel-body">

                    {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update', $post->id ],'files'=>true],['class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('title','Title:',['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('category_id','Category:',['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::select('category_id',$categories, null, ['class'=>'form-control']) !!}
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
                    <div class ="form-group">

                    </div>

                    <div class="panel-body">

                            {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-sm-2']) !!}

                            {!! Form::close() !!}

                            {!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy', $post->id]]) !!}


                                {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-2']) !!}


                        {!! Form::close() !!}
                    </div>


                </div>
                    </div>
                    @include('includes.form_error')

                </div>
            </section>
        </div>

</div>

@endsection