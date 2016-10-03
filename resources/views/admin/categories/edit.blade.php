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
            <li><i class="fa fa-laptop"></i> Edit Categories</li>
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

                {!! Form::model($category, ['method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id]],['class'=>'form-horizontal']) !!}
                <div class="form-group">

                    {!! Form::label('name','Name:',['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="panel-body">

                    {!! Form::submit('Update Category', ['class'=>'btn btn-primary col-sm-3']) !!}



                {!! Form::close() !!}

                    {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy', $category->id]]) !!}


                    {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-sm-3']) !!}


                    {!! Form::close() !!}
                </div>


            </div>
        </section>
    </div>

</div>

<div class="col-sm-6">



</div>

@endsection