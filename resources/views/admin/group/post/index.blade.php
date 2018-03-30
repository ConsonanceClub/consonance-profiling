@extends('admin.layouts.app')


@section('content')


    <div class="row">
        <div class="col-lg-3">
            <h3>All Post for group {{$group->name}}</h3>

        </div>
        <div class="col-lg-9">
            <a href="{{route('post.create', $group->id)}}" class="btn btn-primary">Create a Post For {{$group->name}}</a>

        </div>

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Author</th>
                <th>Post Title</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            </thead>
            <tbody>
            @if($posts)
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><img  height="30" width="30" src="/GroupPostPics/{{$post->image_url ? $post->image_url : "No photo"}}" alt=""></td>
                        <td>{{$post->user->username}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td><a href="{{route('post.edit', $post->id)}}"><span class="fa fa-edit"></span></a></td>
                        <td>
                            <form method="post" id="delete-form-{{$post->id}}" action="{{route('post.destroy', $post->id)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                            </form>

                            <a href="" onclick="
                                    if(confirm('Are you sure you want to delete this ?'))
                                    {
                                    event.preventDefault();document.getElementById('delete-form-{{$post->id}}').submit();}
                                    else
                                    {event.preventDefault();}">
                                <span class="fa fa-trash" style="color: red"></span>
                            </a>
                        </td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        {{--<td>{{$group->updated_at->diffForHumans()}}</td>--}}

                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>

    </div>

    <hr>


@endsection