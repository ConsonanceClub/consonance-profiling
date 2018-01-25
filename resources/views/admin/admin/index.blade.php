@extends('admin.layouts.app')


@section('content')


    <div class="row">
        <div class="col-lg-3">
            <h3>All Users</h3>

        </div>
        <div class="col-lg-9">
            <a href="{{route('admin.create')}}" class="btn btn-primary">Create a new User or Admin</a>

        </div>
    </div>

    <hr>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role ? $user->role->name : 'Use has no role'}}</td>
                    <td>{{$user->active == 1 ? 'Active': 'Not Active'}}</td>
                    <td><a href="{{route('admin.edit', $user->id)}}"><span class="fa fa-edit"></span></a></td>
                    <td>
                        <form method="post" id="delete-form-{{$user->id}}" action="{{route('admin.destroy', $user->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                        </form>

                        <a href="" onclick="
                                if(confirm('Are you sure you want to delete this ?'))
                                {
                                event.preventDefault();document.getElementById('delete-form-{{$user->id}}').submit();}
                                else
                                {event.preventDefault();}">
                            <span class="fa fa-trash" style="color: red"></span>
                        </a>
                    </td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>


@endsection