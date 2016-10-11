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
                <h1> {{$post->title}}</h1>
            </header>
            <div class="panel-body">

                <h3>By : {{$post->user->name}} on {{$post->category ? $post->category->name : 'Uncategorized'}}</h3>

                <p><i class="fa fa-clock-o" aria-hidden="true"></i> {{$post->created_at}}</p>
                <hr>
                <img height="500" src="{{$post->photo ? $post->photo->file : 'http://www.buira.org/assets/images/shared/default-profile.png' }}" alt="" ></td>
                <hr>
                <p>{{$post->body}}</p>
                <hr>
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-comment"></i> {{$post->comments()-> count()}} Comments
            </header>
            <div class="panel-body">


                    @foreach($post->comments as $comment)
                        <div height = "400px" class="col-sm-1">
                            <h3><img height="50"  src={{"https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=wavatar"}} alt="" > </h3>
                            {{--{{ URL::asset('images/1476210073default-profile.png') }}--}}
                        </div>

                        <div class="col-sm-11, right" >
                            <h3>{{$comment -> name}}</h3>
                            <i class="fa fa-clock-o" aria-hidden="true" style="color: #aaa;">{{$comment->created_at->diffForHumans()}}</i>
                            <p>{{$comment -> comment}}</p>
<br/>
                        </div>

                    @endforeach



            </div>
        </section>
    </div>


<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add Comment
            </header>
            <div class="panel-body">

                {!! Form::open(['route'=>['comments.store',$post->id],'method'=>'POST']) !!}

                    <div class="form-group">

                        {!! Form::label('name','Name:',['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">

                        {!! Form::label('email','Email:',['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('email', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">

                        {!! Form::label('comment','Comment:',['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::textArea('comment', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="panel-body">

                        {!! Form::submit('Add Comment', ['class'=>'btn btn-primary']) !!}
                    </div>


                {!! Form::close() !!}
            </div>
        </section>
</div>


@endsection

