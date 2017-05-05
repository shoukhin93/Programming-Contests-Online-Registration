@extends('main')

@section('title')
    Arrange Contest
@endsection

@section('OuterInclude')

    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <link href="{{ asset('css/user_registration.css') }}" rel="stylesheet">

@endsection

@section('ContentOfBody')

    <div class="container">
        <div class="registrationBody">
            <div class="row">
                <div class="col-sm-8"></div>
                <div class=" col-sm-4">
                    <div class="head">
                        <h2 align="center">Contest Arrangement</h2>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-sm-6">
                    <div class="jumbotron">
                        <h2 align="center">Arrange contest by filling the form</h2>  <br>
                        <p>No more than one running contest registration process can be arranged at a time</p><br>
                        <p align="center">Happy Coding! :)</p>
                    </div>
                </div>

                <div class="col-sm-2"></div>

                <div class="col-sm-4">

                    <form class="form-horizontal" action='{{route('admin.arrange_contest.submit')}}' method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <label id = "error" name="error">{{$error}}</label>

                        <div class="form-group">
                            <input class="form-control" type="text" name="contestName" id="contestName"
                                   placeholder="Contest Name">
                        </div>
                        <div class="form-group">
                            <label for="startDate">Contest's Date</label>
                            <input class="form-control" type="date" name="startDate" id="startDate" placeholder="Enter Date">
                        </div>

                        <div class="form-group">
                            <label for="startTime">Start Time:</label>
                            <input class="form-control" type="time" name="startTime" id="startTime"
                                   placeholder="Start Time">
                        </div>

                        <div class="form-group">
                            <label for="endTime">End Time:</label>
                            <input class="form-control" type="time" name="endTime" id="endTime" placeholder="End Time">
                        </div>

                        <div class="form-group">
                            <label for="closeDate">Registration Closing Date: </label>
                            <input class="form-control" type="date" name="closeDate" id="closeDate"
                                   placeholder="Enter Date">
                        </div>

                        <div class="form-group">
                            <label for="closeTime">Registration Closing Time: </label>
                            <input class="form-control" type="time" name="closeTime" id="closeTime"
                                   placeholder="Enter Date">
                        </div>

                        <div class="form-group">

                            <textarea class="form-control" rows="8" id="description" name = "description"
                                      placeholder="description(optional)"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Add Contest</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
  
