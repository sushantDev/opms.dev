@extends('admin.layout')

@section('user')
{{"Admin"}}
@endsection

@section('content')
        <!--overview start-->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i>Polls</h3>
        <ol class="breadcrumb">
            <li><i class="icon_profile"></i><a href="index.html">Polls</a></li>
            <li><i class="fa fa-laptop"></i>All Polls</li>
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
        <th><i class="icon_plus_alt2"></i> Question</th>
        <th><i class="icon_calendar"></i> Starts</th>
        <th><i class="icon_calendar"></i> Ends</th>
        <th><i class ="icon_calendar"></i> Created</th>
        <th><i class ="icon_calendar"></i> Updated</th>
        <th><i class="icon_cogs"></i> Action</th>
    </tr>
    </thead>
    <tbody>
    @if($polls)

        @foreach($polls as $poll)
            <tr>
                <td>{{$poll->id}}</td>
                <td><img height="50" src="{{$poll->photo ? $poll->photo->file : 'http://www.buira.org/assets/images/shared/default-profile.png' }}" alt="" ></td>
                <td>{{$poll->user->name}}</td>
                <td>{{$poll->category ? $poll->category->name : 'Uncategorized'}}</td>
                <td>{{$poll->question}}</td>
                <td>{{$poll->starts}}</td>
                <td>{{$poll->ends}}</td>
                <td>{{$poll->created_at->diffForhumans()}}</td>
                <td>{{$poll->updated_at->diffForhumans()}}</td>
                <td><div class="btn-group">
                        <a class="btn btn-primary" href="{{route('admin.polls.edit', $poll->id)}}"> <i class="icon_plus_alt2"></i> </a>

                        <a class="btn btn-danger" href="{{route('admin.polls.edit', $poll->id)}}"> <i class="icon_close_alt2"></i> </a>
                    </div></td>

            </tr>
        @endforeach


    @endif
    </tbody>
</table>



@endsection