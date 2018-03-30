@extends('admin.layouts.app')


@section('content')

    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"> Add a group</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="col-lg-6 col-lg-offset-3">
                            @include('includes.form_error')
                        </div>

                        <form role="form" method="post" action="{{route('group.store')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="col-lg-6 col-lg-offset-3">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" >
                                </div>

                                <div class="row" style="margin-top: 25px; margin-bottom: 20px">

                                    <div class="form-group col-lg-4">
                                        <label for="icon_url">Profile Pic</label>
                                        <input type="file" id="icon_url" name="icon_url">
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="form-group col-lg-3">
                                        <label for="status">Active </label>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="active" id="active" @if(old('active') == 1)checked @endif  value="1">Active</label>
                                        </div>
                                    </div>

                                </div>





                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('group.index')}}" class="btn btn-danger">Back</a>
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