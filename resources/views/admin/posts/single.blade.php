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
            <li><i class="fa fa-laptop"></i> View Posts</li>
        </ol>
    </div>

</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h1> {{$post->title}} </h1>
            </header>
            <div class="panel-body">
                <h2>By : {{$post->user->name}} on {{$post->category ? $post->category->name : 'Uncategorized'}}</h2>

                <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at}}</p>
                <hr>
                <img height="500" src="{{$post->photo ? $post->photo->file : 'http://www.buira.org/assets/images/shared/default-profile.png' }}" alt="" ></td>
                <hr>
                <p>{{$post->body}}</p>
                <hr>

            </div>
        </section>
    </div>
    </div>



@endsection