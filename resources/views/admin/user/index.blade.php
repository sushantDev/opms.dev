@extends('admin.layout')

@section('user')
{{"User"}}
@endsection

@section('content')
        <!--overview start-->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Users</h3>
        <ol class="breadcrumb">
            <li><i class="icon_profile"></i><a href="index.html">All Users</a></li>
            <li><i class="fa fa-laptop"></i>Dashboard</li>
        </ol>
    </div>

</div>

<table class="table table-hover">
   <thead>
      <tr>
          <th >ID</th>
          <th><i class="fa fa-laptop"></i> Photo</th>
          <th><i class ="icon_profile"></i> Name</th>
          <th><i class ="icon_mail_alt"></i> Email</th>
          <th><i class ="icon_profile"></i> Role</th>
          <th><i class ="icon_check_alt2"></i> Status</th>
          <th><i class ="icon_calendar"></i> Created at</th>
          <th><i class ="icon_calendar"></i> Updated at</th>
          <th><i class="icon_cogs"></i> Action</th>
      </tr>
   </thead>
    <tbody>
    @if($users)

        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://www.buira.org/assets/images/shared/default-profile.png' }}" alt="" ></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role_id}}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
                <td><div class="btn-group">
                    <a class="btn btn-primary" href="{{route('admin.users.edit', $user->id)}}"> <i class="icon_plus_alt2"></i> </a>

                    <a class="btn btn-danger" href="{{route('admin.users.edit', $user->id)}}"> <i class="icon_close_alt2"></i> </a>
                </div></td>

            </tr>
        @endforeach
    @endif

    </tbody>
</table>
@endsection