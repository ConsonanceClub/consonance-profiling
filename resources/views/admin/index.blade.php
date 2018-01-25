@extends('admin.layouts.app')


@section('content')


    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Username</th>
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
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role ? $user->role->name : 'Use has no role'}}</td>
                    <td>{{$user->active == 1 ? 'Active': 'Not Active'}}</td>
                    <td><a href="{{route('admin.edit', $user->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href=""><span class="glyphicon glyphicon-trash"></span></a></td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>


@endsection