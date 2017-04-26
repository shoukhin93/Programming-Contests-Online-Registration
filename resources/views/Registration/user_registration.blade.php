@extends('main')

@section('title')
    Registration
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/user_registration.css') }}" rel="stylesheet">
    <link href="{{ asset('css/parsley.css') }}" rel="stylesheet">
    <script src="{{ asset('js/parsley.min.js') }}"></script>
@endsection

@section('ContentOfBody')

    <div class="container">
        <div class="registrationBody">
            <div class="row">
                <div class="col-sm-8"></div>
                <div class="col-sm-4">
                    <div class="head">
                        <h2 align="center">Registration form</h2>

                        {{-- if there are any error in serverside validation--}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li class="error">{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="jumbotron">
                        <h2 align="center">Welcome to Registration page</h2>  <br>
                        <p>Fill the data correctly and wait for admin's confirmation.</p>
                        <p>Already have an account? try <a href="#" data-toggle="modal"
                                                           data-target="#signinModal">Sign in</a></p>
                    </div>
                </div>

                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <form action="/register_user" method="post" id="registartion-Form" class="demo-form"
                          data-parsley-validate="">

                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="form-group">
                            <input type="text" class="form-control" id="userFirstName" name="userFirstName"
                                   placeholder="First Name" required="" data-parsley-trigger="change"
                                   data-parsley-maxlength="15"
                                   value="{{ old('userFirstName') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="userLastName" name="userLastName"
                                   placeholder="Last Name" required="" data-parsley-trigger="change"
                                   data-parsley-maxlength="15"
                                   value="{{ old('userLastName') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="student_id" name="student_id"
                                   placeholder="Enter Student ID" data-parsley-trigger="change"
                                   data-parsley-type="digits"
                                   data-parsley-length="[8, 8]"
                                   data-parsley-length-message="Student ID should be 8 digits"
                                   required=""
                                   value="{{ old('student_id') }}">
                        </div>
                        <div class="form-group">
                            <select id="year" name="studentYear" class="form-control" data-parsley-trigger="change"
                                    required="">
                                <option style="color: black" value="" disabled selected hidden>Select Year
                                </option>
                                <option style="color: black" value="1">1st Year</option>
                                <option style="color: black" value="2">2nd Year</option>
                                <option style="color: black" value="3">3rd Year</option>
                                <option style="color: black" value="4">4th Year</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="gender" data-parsley-trigger="change" value="male"
                                       required="">Male</label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="female">Female</label>

                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email"
                                   data-parsley-trigger="change" required=""
                                   value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password1" name="password1"
                                   data-parsley-trigger="change" placeholder="password"
                                   data-parsley-length="[6, 15]" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password2" name="password2"
                                   data-parsley-equalto="#password1"
                                   data-parsley-trigger="keyup"
                                   placeholder="Re-type password"
                                   data-parsley-length="[6, 15]"
                                   data-parsley-equalto-message="Password Doesn't Match!"
                                   required="">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="userContactNo" name="userContactNo"
                                   placeholder="Contact No." data-parsley-trigger="change" data-parsley-type="number"
                                   required=""
                                   value="{{ old('userContactNo') }}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    </div>


    {{-- for validating form at user side--}}
    <script type="text/javascript">
        $(function () {
            $('#demo-form').parsley().on('form:submit', function () {
                return false; // Don't submit form for this demo
            });
        });
    </script>

    @include('login.login')




@endsection
  
