@extends('main')

@section('title')
    Contest Registration
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/user_registration.css') }}" rel="stylesheet">
@endsection

@section('ContentOfBody')

    <div class="container">
        <div class="registrationBody">

            <h1 align="center">RU programming contest - 01</h1>
            <h2 align="center">Date: 11/11/1111</h2>

            <div class="head1">
                <h3 align="center">Time : 10:00 AM</h3>
            </div>
            <div class="row">
                <div class="col-sm-8"></div>
                <div class=" col-sm-4">
                    <div class="head">
                        <h4 align="center">Registration form</h4>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="jumbotron">
                        <h2 align="center">Select team members carefully</h2>  <br>
                        <p>Wait for their confirmation to show your team at approval list</p>
                    </div>
                </div>

                <div class="col-sm-2"></div>
                <div class="col-sm-4">

                    <form action='/contest_registration' method="post">
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <label id = "error" name="error">{{$error}}</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="teamName" placeholder="Team Name" name = "team_name">
                        </div>
                        <div class="form-group">
                            <div class="ui-widget">
                                <input type="text" class="form-control" id="mem1ID" placeholder="Your Student ID" name = "mem1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="ui-widget">
                                <input type="text" class="form-control" id="mem2ID" placeholder="Member 2 Student ID"  name = "mem2">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="ui-widget">
                                <input type="text" class="form-control" id="mem3ID" placeholder="Member 3 Student ID"  name = "mem3">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD




=======
>>>>>>> 47a2e8af5aebf64d6eb881aea5875e481369554a
@endsection
  
