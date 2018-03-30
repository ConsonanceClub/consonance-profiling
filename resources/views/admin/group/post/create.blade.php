@extends('admin.layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-6 col-lg-offset-3">
            <h1>Create a Post for group {{$group->name}}</h1>
            <hr>
            @include('includes.form_error')

        </div>
        <form role="form" method="post" action="{{route('post.store', $group->id)}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" value="{{old('title')}}" name="title" id="title" >
                    </div>

                    <div class="form-group">
                        <label for="photo_id">Profile Pic</label>
                        <input type="file" id="image_url" name="image_url">
                    </div>

                    <div class="row">

                        <div class="form-group col-lg-9">
                            <label>Select Admin</label>
                            <select name="user_id" class="form-control" >
                                <option selected disabled>Select an Admin</option>
                                @foreach($admins as $admin)
                                    <option value="{{$admin->id}}">{{$admin->username}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label>Description</label>
                        <textarea rows="5" class="form-control" placeholder="Place message Here....." id="description" name="description" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('post.index', $group->id)}}" class="btn btn-danger">Back</a>
                    </div>
                </div>

            </div>



        </form>

    </div>

@endsection