@extends('admin.layout')

@section('user')
{{"User"}}
@endsection

@section('content')
        <!--overview start-->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> User</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="fa fa-laptop"></i>Dashboard</li>
        </ol>
    </div>

</div>

<table class="table table-hover">
   <thead>
      <tr>
          <th>ID</th>
          <th>Photo</th>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Status</th>
          <th>Created at</th>
          <th>Updated at</th>
      </tr>
   </thead>
    <tbody>
    @if($users)

        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://www.buira.org/assets/images/shared/default-profile.png' }}" alt="" ></td>
                <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role_id}}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>

            </tr>
        @endforeach
    @endif

    </tbody>
</table>
@endsection