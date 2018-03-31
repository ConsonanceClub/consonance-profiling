@extends('admin.layouts.app')

@section('styles')

    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">


@endsection

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Group</h3>
                    <a style="padding: 10px" href="{{route('post.create', $group->id)}}"  CLASS="col-lg-offset-5 btn btn-warning">
                        <i class="fa fa-user-plus" style="padding-right: 10px"></i>Create a Post For {{$group->name}}
                    </a>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>

                <div class="box-body">
                    <div class="box">
                        <div class="box-header">
                            @include('includes.form_error')
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body adScroll">
                            <table id="example1" class="table table-bordered table-striped">
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
                                </tr>
                                </thead>
                                <tbody>
                                @if($posts)
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td><img  height="30" width="30" src="/GroupPostPics/{{$post->image_url ? $post->image_url : "No photo"}}" alt=""></td>
                                            <td>{{$post->user->first_name}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{str_limit($post->description, $limit = 100, $end = '...')}}</td>
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
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Photo</th>
                                    <th>Author</th>
                                    <th>Post Title</th>
                                    <th>Description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Created at</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@section('scripts')

    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()

        })
    </script>

@endsection


@endsection

