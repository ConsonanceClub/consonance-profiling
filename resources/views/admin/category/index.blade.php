@extends('admin.layouts.app')


@section('content')


    <div class="row">
        <div class="col-lg-3">
            <h3>All Categories</h3>

        </div>
        <div class="col-lg-9">
            <a href="{{route('category.create')}}" class="btn btn-primary">Create a Category</a>

        </div>
    </div>

    <hr>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>
        @if($categories)
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td><a href="{{route('category.edit', $category->id)}}"><span class="fa fa-edit"></span></a></td>
                    <td>
                        <form method="post" id="delete-form-{{$category->id}}" action="{{route('category.destroy', $category->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                        </form>

                        <a href="" onclick="
                                if(confirm('Are you sure you want to delete this ?'))
                                {
                                event.preventDefault();document.getElementById('delete-form-{{$category->id}}').submit();}
                                else
                                {event.preventDefault();}">
                            <span class="fa fa-trash" style="color: red"></span>
                        </a>
                    </td>
                    <td>{{$category->created_at->diffForHumans()}}</td>
{{--                    <td>{{$$category->updated_at->diffForHumans()}}</td>--}}

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>


@endsection