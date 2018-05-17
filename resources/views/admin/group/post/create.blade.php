@extends('admin.layouts.app')


@section('content')

    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create a Post for group {{$group->name}}</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="col-lg-6 col-lg-offset-3">
                            @include('includes.form_error')
                        </div>

                        <form role="form" method="post" action="{{route('post.store', $group->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="col-lg-6 col-lg-offset-3">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" value="{{old('title')}}" name="title" id="title" required>
                                </div>

                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text"  name="slug" class="form-control" id="slug" placeholder="The slug will be generated for you based on the title" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="photo_id">Post Pic</label>
                                    <input type="file" id="image_url" name="image_url" required>
                                </div>

                                <div class="row">

                                    <div class="form-group col-lg-9">
                                        <label>Select Admin</label>
                                        <select name="user_id" class="form-control" required>
                                            <option selected disabled>Select an Admin</option>
                                            @foreach($admins as $admin)
                                                <option value="{{$admin->id}}">{{$admin->first_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <label>Description</label>
                                    <textarea
                                            name="description"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"id="editor1" required>
                                        {{old('description')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('post.index', $group->id)}}" class="btn btn-danger">Back</a>
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

@section('scripts')

    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5();
        });
    </script>

    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

@endsection