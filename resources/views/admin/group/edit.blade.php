@extends('admin.layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-6 col-lg-offset-3">
            <h1>Edit a group <b>{{$group->name}}</b></h1>
            <hr>
            @include('includes.form_error')

        </div>
        <form role="form" method="post" action="{{route('group.update', $group->id)}}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PATCH')}}

            <div class="box-body">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" value="{{old('name') ? old('name') : $group->name}}" name="name" id="name" >
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
                                <label><input type="checkbox" name="active" id="active"  @if(old('active') == 1 || $group->active == 1)checked @endif value="1">Active</label>
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

@endsection