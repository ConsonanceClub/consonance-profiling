@extends('admin.layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-6 col-lg-offset-3">
            <h1>Create a Category</h1>
            <hr>
            @include('includes.form_error')

        </div>
        <form role="form" method="post" action="{{route('category.store')}}" >
            {{csrf_field()}}
            <div class="box-body">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" >
                    </div>
                    <div class="form-group ">
                        <label>Description</label>
                        <textarea rows="5" class="form-control" placeholder="Place message Here....." id="description" name="description" required>{{old('description')}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('category.index')}}" class="btn btn-danger">Back</a>
                </div>

            </div>



        </form>

    </div>

@endsection