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
            <li><i class="fa fa-laptop"></i> All Posts</li>
        </ol>
    </div>

</div>

<table class="table table-hover">
   <thead>
      <tr>
          <th>Id</th>
          <th><i class="fa fa-laptop"></i> Photo</th>
          <th><i class ="icon_profile"></i> User</th>
          <th><i class ="icon_check_alt2"></i> Category</th>
          <th><i class="icon_plus_alt2"></i> Title</th>
          <th><i class="icon_plus_alt2"></i> Body</th>
          <th><i class="icon_plus_alt2"></i> View Post</th>
          <th><i class ="icon_calendar"></i> Created</th>
          <th><i class ="icon_calendar"></i> Updated</th>
          <th><i class="icon_cogs"></i> Action</th>
      </tr>
   </thead>
    <tbody>
    @if($posts)

        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://www.buira.org/assets/images/shared/default-profile.png' }}" alt="" ></td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                <td>{{$post->title}}</td>
                <td>{{str_limit($post->body, 20)}}</td>
                <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->slug ? $post->slug : 'No slug'}}</a></td>
                <td>{{$post->created_at->diffForhumans()}}</td>
                <td>{{$post->updated_at->diffForhumans()}}</td>
                <td><div class="btn-group">
                        <a class="btn btn-primary" href="{{route('admin.posts.edit', $post->id)}}"> <i class="icon_plus_alt2"></i> </a>

                        <a class="btn btn-danger" href="{{route('admin.posts.edit', $post->id)}}"> <i class="icon_close_alt2"></i> </a>
                    </div></td>

            </tr>
        @endforeach


    @endif
    </tbody>
</table>

@endsection