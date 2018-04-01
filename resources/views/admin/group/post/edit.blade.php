@extends('admin.layouts.app')


@section('content')

    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"> Edit Post</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="col-lg-6 col-lg-offset-3">
                            @include('includes.form_error')
                        </div>
                        <form role="form" method="post" action="{{route('post.update', $posting->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}

                            <div class="box-body">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" value="{{old('title') ? old('title') : $posting->title}}" name="title" id="title" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text"  name="slug" class="form-control" id="slug" value="{{$posting->slug}}"placeholder="Enter slug" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label for="photo_id">Group Pic - <img  height="30" width="30" src="/GroupPostPics/{{$posting->image_url ? $posting->image_url : "No photo"}}" alt=""></label>
                                        <input type="file" id="image_url" name="image_url">
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-lg-9">
                                            <label>Select Admin</label>
                                            <select name="user_id" class="form-control" >
                                                <option selected disabled>Select an Admin</option>
                                                @foreach($admins as $admin)
                                                    <option value="{{$admin->id}}"

                                                            @if($admin->id == $posting->user_id)

                                                            selected

                                                            @endif

                                                    >{{$admin->first_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group ">
                                        <label>Description</label>
                                        <textarea rows="5" class="form-control" placeholder="Place message Here....." id="description" name="description" required>{{old('description') ? old('description') : $posting->description}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                {{--                        <a href="{{route('post.index', $group->id)}}" class="btn btn-danger">Back</a>--}}
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