@extends('main')

@section('title')
    Modify Contest
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
                        <h2 align="center">Modify Contest info</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="jumbotron">
                        <h2 align="center">Modify contest by updating the form</h2>  <br>
                        <p>No more than one running contest registration process can be arranged at a time</p><br>
                        <p align="center">Happy Coding! :)</p>
                    </div>
                </div>

                <div class="col-sm-2"></div>

                <div class="col-sm-4">

                    <form>
                        <div class="form-group">
                            <input class="form-control" type="text" name="date" id="cotestName"
                                   placeholder="Contest Name">
                        </div>
                        <div class="form-group">
                            <label for="date">Contest's Date:</label>
                            <input class="form-control" type="date" name="date" id="date" placeholder="Enter Date">
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
                            <label for="date">Registration Closing Date & time : </label>
                            <input class="form-control" type="datetime-local" name="regClosingDate" id="regClosingDate"
                                   placeholder="Enter Date">
                        </div>

                        <div class="form-group">

                            <textarea class="form-control" rows="7" id="description"
                                      placeholder="description(optional)"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Prospond</button>
                        </div>
                    </form>

                </div>


            </div>

        </div>
    </div>



@endsection
  
