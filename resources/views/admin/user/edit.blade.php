@extends('admin.layout')

@section('user')
{{"User"}}
@endsection

@section('content')
        <!--overview start-->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i>Edit User</h3>
        <ol class="breadcrumb">
            <li><i class="icon_profile"></i><a href="index.html">Users</a></li>
            <li><i class="fa fa-laptop"></i>Edit User</li>
        </ol>
    </div>
</div>


        <div class="panel-body">
            <div class="col-lg-2 col-sm-2">
                <div class="follow-ava">

                    <img src="{{$user->photo ? $user->photo->file : 'http://www.buira.org/assets/images/shared/default-profile.png' }}" alt="" class="img-responsive img-rounded">

                </div>
            </div>
        </div>




<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Edit User
            </header>
            <div class="panel-body">

                {!! Form::model($user, ['method'=>'PATCH','action'=>['AdminUsersController@update', $user-> id ],'files'=>true],['class'=>'form-validate form-horizontal']) !!}
                <div class="form-group">

                    {!! Form::label('name','Name:',['class'=>'control-label col-lg-2']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">

                    {!! Form::label('email','Email:',['class'=>'control-label col-lg-2']) !!}
                    <div class="col-sm-10">
                        {!! Form::email('email', null, ['class'=>'form-control']) !!}
                    </div>

                </div>

                <div class="form-group">
                    {!! Form::label('role_id','Role:',['class'=>'control-label col-lg-2']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('role_id',$roles,  null, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('is_active','Status:',['class'=>'control-label col-lg-2']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('is_active',array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('photo_id','Profile pic:',['class'=>'col-sm-2 control-label']) !!}

                    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}

                </div>

                <div class="form-group">
                    {!! Form::label('password','Password:',['class'=>'control-label col-lg-2']) !!}
                    <div class="col-sm-10">
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class ="form-group">

                </div>
                <div class="panel-body>
                    <div class="btn-group btn-group-justified">

                        {!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-2']) !!}

                {!! Form::close() !!}

                        {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy', $user->id]]) !!}



                                    {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-2']) !!}



                        {!! Form::close() !!}
                    </div>
                </div>



                @include('includes.form_error')

            </div>

        </section>
    </div>

@endsection