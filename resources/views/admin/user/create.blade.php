@extends('admin.layout')

@section('user')
{{"User"}}
@endsection

@section('content')
        <!--overview start-->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i>Create User</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="fa fa-laptop"></i>Dashboard</li>
        </ol>
    </div>
</div>




<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Create User
            </header>
            <div class="panel-body">

                {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true],['class'=>'form-validate form-horizontal']) !!}
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
                        {!! Form::select('role_id',[''=>'Choose Options'] + $roles,  null, ['class'=>'form-control']) !!}
                    </div>
                    </div>

                    <div class="form-group">
                    {!! Form::label('is_active','Status:',['class'=>'control-label col-lg-2']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('is_active',array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}
                    </div>
                    </div>

                    <div class="form-group">
                    {!! Form::label('file','Profile pic:',['class'=>'col-sm-2 control-label']) !!}

                        {!! Form::file('file', null, ['class'=>'form-control']) !!}

                    </div>

                    <div class="form-group">
                    {!! Form::label('password','Password:',['class'=>'control-label col-lg-2']) !!}
                    <div class="col-sm-10">
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                    </div>
                    </div>

                    <div class="form-group">

                        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
                    </div>


                {!! Form::close() !!}

                 @include('includes.form_error')

            </div>
        </section>
</div>

@endsection