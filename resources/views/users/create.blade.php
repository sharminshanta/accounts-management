@extends('layouts.application')
@section('title', 'User Create')
@section('content')
    <div class="content-heading">
        <!-- START Language list-->
        <div class="pull-right">
            <div class="btn-group">
                <a href="#" class="mb-sm btn btn-info btn-outline">See Users List</a>
            </div>
        </div>
        Create User
        <small data-localize="dashboard.WELCOME">Please provide all valid information to create a new user</small>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">{{--heading--}}</div>
        <div class="panel-body">
            <form role="form" action="/admin/users" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label>First Name</label>
                            <input type="text" name="first_name" placeholder="First name" value="{{ old('first_name') }}" class="form-control">
                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label>Last Name</label>
                            <input type="text" name="last_name" placeholder="Last name" value="{{ old('last_name') }}" class="form-control" >
                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email address" value="{{ old('email') }}" class="form-control" >
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label>Phone</label>
                            <input type="text" name="phone_number" placeholder="Phone number" value="{{ old('phone_number') }}" class="form-control">
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group {{ $errors->has('website') ? ' has-error' : '' }}">
                            <label>Website</label>
                            <input type="text" name="website" placeholder="Website" value="{{ old('website') }}" class="form-control">
                            @if ($errors->has('website'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group  {{ $errors->has('role') ? ' has-error' : '' }}">
                            <label>Role</label>
                            <select class="form-control" name="role">
                                <option value="" hidden="hidden">Choose Role</option>
                                @foreach($roles as $role)
                                    <option value="{{$role['id']}}">{{$role['name']}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('role'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" placeholder="Confirm password" class="form-control">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-sm btn-success">Create User</button>
            </form>
        </div>
    </div>
@endsection