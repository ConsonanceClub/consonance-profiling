@extends('admin.layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-6 col-lg-offset-3">
            @include('includes.form_error')

        </div>
        <form role="form" method="post" action="{{route('admin.update', $user->id)}}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="box-body">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" value="{{old('username') ? old('username') : $user->username}}" name="username" id="username" >
                    </div>
                    <div class="form-group">
                        <label for="first_name">First Nme</label>
                        <input type="text" class="form-control" value="{{old('first_name')  ? old('first_name') : $user->first_name}}" name="first_name" id="first_name" >
                    </div>
                    <div class="form-group">
                        <label for="last_name">Username</label>
                        <input type="text" class="form-control" value="{{old('last_name') ? old('last_name') : $user->last_name}}" name="last_name" id="last_name" >
                    </div>
                    <div class="form-group">
                        <label for="email"> Email</label>
                        <input type="email" class="form-control" value="{{old('email') ? old('email') : $user->email}}" name="email" id="email" >
                    </div>
                    <div class="form-group">
                        <label for="photo_id">Profile Pic</label>
                        <input type="file" id="photo_id" name="photo_id">
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label for="status">Active </label>
                            <div class="checkbox">
                                <label><input type="checkbox" name="active" id="active" @if(old('active') == 1 || $user->active == 1)checked @endif  value="1">Active</label>
                            </div>
                        </div>
                        <div class="form-group col-lg-9">
                            <label>Select Role</label>
                            {{--<select  name="categories[]" class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true">--}}
                            <select name="role_id" class="form-control" >
                                <option selected disabled>Select a Role</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}"

                                    @if($role->id == $user->role_id)

                                        selected

                                    @endif

                                    >{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" value="{{old('password')}}" name="password" id="password" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Password Confirmation:</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('admin.index')}}" class="btn btn-danger">Back</a>
                    </div>
                </div>

            </div>



        </form>

    </div>

@endsection