@extends('admin.layouts.app')


@section('content')


    <div class="row">
        <div class="col-lg-3">
            <h3>All Categories</h3>

        </div>
        <div class="col-lg-9">
            <a href="{{route('activity.create')}}" class="btn btn-primary">Create an  Activity</a>

        </div>
    </div>

    <hr>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Admin Name</th>
            <th>Category Name</th>
            <th>Title</th>
            <th>Body</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Active</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>
        @if($activities)
            @foreach($activities as $activity)
                <tr>
                    <td>{{$activity->id}}</td>
                    <td><img  height="30" width="30" src="/ActivityPics/{{$activity->image_url ? $activity->image_url : "No photo"}}" alt=""></td>
                    <td>{{$activity->user->username}}</td>
                    <td>{{$activity->category->name}}</td>
                    <td>{{$activity->title}}</td>
                    <td>{{$activity->body}}</td>
                    <td>{{$activity->start_date}}</td>
                    <td>{{$activity->end_date}}</td>
                    <td>{{$activity->active == 1 ? 'Active': 'Not Active' }}</td>
                    <td><a href="{{route('activity.edit', $activity->id)}}"><span class="fa fa-edit"></span></a></td>
                    <td>
                        <form method="post" id="delete-form-{{$activity->id}}" action="{{route('activity.destroy', $activity->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                        </form>

                        <a href="" onclick="
                                if(confirm('Are you sure you want to delete this ?'))
                                {
                                event.preventDefault();document.getElementById('delete-form-{{$activity->id}}').submit();}
                                else
                                {event.preventDefault();}">
                            <span class="fa fa-trash" style="color: red"></span>
                        </a>
                    </td>
                    <td>{{$activity->created_at->diffForHumans()}}</td>
                    {{--<td>{{$$activity->updated_at->diffForHumans()}}</td>--}}

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>


@endsection