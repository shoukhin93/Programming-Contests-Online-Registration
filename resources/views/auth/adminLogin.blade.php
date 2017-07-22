@extends('main')

@section('title')
    Admin Log In
@endsection

@section('OuterInclude')

@endsection

@section('ContentOfBody')
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('admin_id') ? 'has-error' :'' }} {{ Session::has('admin_no_match') ? 'has-error' : '' }}">
                            <label for="admin_id" class="col-md-4 control-label">Admin ID</label>

                            <div class="col-md-6">
                                <input id="admin_id" type="text" class="form-control" name="admin_id" value="{{ old('admin_id') }}" max="15" required autofocus>

                                @if ($errors->has('admin_id') || Session::has('admin_no_match'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('admin_id') }}</strong>
                                        <strong> {{ Session::get('admin_no_match') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</div>
@endsection
