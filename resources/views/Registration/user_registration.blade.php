@extends('main')

@section('title')
    Registration
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/user_registration.css') }}" rel="stylesheet">
@endsection

@section('ContentOfBody')

    <div class="container">
        <div class="registrationBody">
            <div class="row">
                <div class="col-sm-8"></div>
                <div class="col-sm-4">
                    <div class="head">
                        <h2 align="center">Registration form</h2>
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
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="userFirstName"
                                   placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="userLastName"
                                   placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="userID"
                                   placeholder="Enter Student ID">
                        </div>
                        <div class="form-group">
                            <select id="year" name="studentYear" class="form-control">
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
                                <input type="radio" name="gender">Male</label>
                            <label class="radio-inline">
                                <input type="radio" name="gender">Female</label>

                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="cpwd"
                                   placeholder="Re-type password">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="userContactNo"
                                   placeholder="Contact No.">
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

    @include('login.login')


@endsection
  
