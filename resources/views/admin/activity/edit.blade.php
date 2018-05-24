@extends('admin.layouts.app')


@section('content')

    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"> Edit an Activity</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="col-lg-6 col-lg-offset-3">
                            @include('includes.form_error')
                        </div>
                            <form role="form" method="post" action="{{route('activity.update', $activity->id)}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('PATCH')}}

                                <div class="box-body">
                                    <div class="col-lg-6 col-lg-offset-3">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" value="{{old('title') ? old('title') : $activity->title}}" name="title" id="title" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="slug">Slug</label>
                                            <input type="text"  name="slug" class="form-control" id="slug" value="{{$activity->slug}}"placeholder="Enter slug" disabled>
                                        </div>

                                        <div class="row" style="margin-top: 25px; margin-bottom: 20px">

                                            <div class="form-group col-lg-6">
                                                <label for="image_url">Activity Pic - <img  height="30" width="30" src="/ActivityPics/{{$activity->image_url ? $activity->image_url : "No photo"}}" alt=""></label>
                                                <input type="file" id="image_url" name="image_url">
                                            </div>

                                            <div class="form-group col-lg-6 ">
                                                <label>Select Admin</label>
                                                <select name="user_id" class="form-control" >
                                                    <option selected disabled>Select an Admin</option>
                                                    @foreach($admins as $admin)
                                                        <option value="{{$admin->id}}"

                                                            @if($admin->id == $activity->user_id)

                                                                 selected

                                                            @endif

                                                        >{{$admin->first_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="form-group col-lg-3">
                                                <label for="status">Status </label>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="active" id="active"  @if(old('active') == 1 || $activity->active == 1)checked @endif value="1">Active</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-9">
                                                <label>Select Category</label>
                                                <select name="category_id" class="form-control" >
                                                    <option selected disabled>Select a Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}"

                                                            @if($category->id == $activity->category_id)

                                                                selected

                                                            @endif

                                                        >{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <label for="location">Location</label>
                                            <input type="text" class="form-control"  value="{{old('location')? old('location') : $activity->location}}" name="location" id="location" >
                                        </div>

                                        <div class="row">

                                            <div class="form-group col-lg-6">
                                                <label for="title">Start Date -  {{$activity->start_date}}</label>
                                                <input type="datetime-local" class="form-control" value="{{old('start_date')? old('start_date') : $activity->start_date}}" name="start_date" id="start_date" >
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="title">End Date -  {{$activity->end_date}}</label>
                                                <input type="datetime-local" class="form-control" value="{{old('end_date')? old('end_date') : $activity->end_date}}" name="end_date" id="end_date" >
                                            </div>

                                        </div>



                                        <div class="form-group ">
                                            <label>Body</label>
                                            <textarea rows="5" class="form-control" placeholder="Place message Here....." id="body" name="body" required>{{old('body') ? old('body') : $activity->body}}</textarea>
                                        </div>



                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="{{route('activity.index')}}" class="btn btn-danger">Back</a>
                                        </div>
                                    </div>

                                </div>



                            </form>


                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection