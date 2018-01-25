@extends('admin.layouts.app')


@section('content')


    <div class="row">
        <div class="col-lg-3">
            <h3>All Groups</h3>

        </div>
        <div class="col-lg-9">
            <a href="{{route('group.create')}}" class="btn btn-primary">Create a Group</a>

        </div>
    </div>

    <hr>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Group Name</th>
            <th>Active</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>
        @if($groups)
            @foreach($groups as $group)
                <tr>
                    <td>{{$group->id}}</td>
                    <td><a href="{{route('post.index', $group->id)}}"><img  height="30" width="30" src="/GroupProfilePic/{{$group->icon_url ? $group->icon_url : "No photo"}}" alt=""></a></td>
                    <td><a href="{{route('post.index', $group->id)}}">{{$group->name}}</a></td>
                    <td>{{$group->active == 1 ? 'Active': 'Not Active' }}</td>
                    <td><a href="{{route('group.edit', $group->id)}}"><span class="fa fa-edit"></span></a></td>
                    <td>
                        <form method="post" id="delete-form-{{$group->id}}" action="{{route('group.destroy', $group->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                        </form>

                        <a href="" onclick="
                                if(confirm('Are you sure you want to delete this ?'))
                                {
                                event.preventDefault();document.getElementById('delete-form-{{$group->id}}').submit();}
                                else
                                {event.preventDefault();}">
                            <span class="fa fa-trash" style="color: red"></span>
                        </a>
                    </td>
                    <td>{{$group->created_at->diffForHumans()}}</td>
                    {{--<td>{{$group->updated_at->diffForHumans()}}</td>--}}

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>


@endsection