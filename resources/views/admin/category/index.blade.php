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
                    <a style="padding: 10px" href="{{route('category.create')}}"  CLASS="col-lg-offset-5 btn btn-warning">
                        <i class="fa fa-user-plus" style="padding-right: 10px"></i>Add New Category
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
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    {{--<th>Created at</th>--}}
                                    {{--<th>Updated at</th>--}}
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
{{--                                            <td>{{$category->created_at->diffForHumans()}}</td>--}}
                                            {{--                    <td>{{$$category->updated_at->diffForHumans()}}</td>--}}

                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    {{--<th>Created at</th>--}}
                                    {{--<th>Updated at</th>--}}
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

