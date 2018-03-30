@extends('admin.layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-6 col-lg-offset-3">
            <h1>Create a Event</h1>
            <hr>
            @include('includes.form_error')

        </div>
        <form role="form" method="post" action="{{route('activity.store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" value="{{old('title')}}" name="title" id="title" >
                    </div>

                    <div class="row" style="margin-top: 25px; margin-bottom: 20px">

                        <div class="form-group col-lg-4">
                            <label for="image_url">Profile Pic</label>
                            <input type="file" id="image_url" name="image_url">
                        </div>

                        <div class="form-group col-lg-8 ">
                            <label>Select Admin</label>
                            <select name="user_id" class="form-control" >
                                <option selected disabled>Select an Admin</option>
                                @foreach($admins as $admin)
                                    <option value="{{$admin->id}}">{{$admin->username}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>


                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label for="status">Active </label>
                            <div class="checkbox">
                                <label><input type="checkbox" name="active" id="active" @if(old('active') == 1)checked @endif  value="1">Active</label>
                            </div>
                        </div>
                        <div class="form-group col-lg-9">
                            <label>Select Category</label>
                            <select name="category_id" class="form-control" >
                                <option selected disabled>Select a Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6">
                            <label for="title">Start Date</label>
                            <input type="datetime-local" class="form-control" value="{{old('start_date')}}" name="start_date" id="start_date" >
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="title">End Date</label>
                            <input type="datetime-local" class="form-control" value="{{old('end_date')}}" name="end_date" id="end_date" >
                        </div>

                    </div>



                    <div class="form-group ">
                        <label>Body</label>
                        <textarea rows="5" class="form-control" placeholder="Place message Here....." id="body" name="body" required></textarea>
                    </div>



                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('activity.index')}}" class="btn btn-danger">Back</a>
                    </div>
                </div>

            </div>



        </form>

    </div>

@endsection