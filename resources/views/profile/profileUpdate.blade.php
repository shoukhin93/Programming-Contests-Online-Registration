@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
    Profile Update
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/profile_update.css') }}" rel="stylesheet" >
    <script src="{{ asset('js/profile_update.js') }}"></script>
@endsection


@section('ContentOfBody')

{{-- Main Profile View --}}
<div class="container">
    <div class=" col-sm-12 pro_head">
        <h2>Update Profie</h2>
    </div>

    <div class="col-sm-4 pro_image" align="center">
        <h4>Current Profile Picture.</h4>
        <img  id="ProPicUp" src="{{ asset($Personal->img) }}" class="img-thumbnail clearfix" alt="Profile Pic" width="200" height="200">
        <form action="{{route('savePicture')}}" method="post" enctype="multipart/form-data">
             <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <input type="file" name="fileToUpload" id="fileToUpload" class="file" accept="image/jpg, image/jpeg, image/png" required>
            </div>

            <div class="input-group" style="width:220px;">
                <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                <input id="displayFileName" type="text" class="form-control" value="" readonly placeholder="Upload Image">
                <span class="input-group-btn">
                    <button class="browse btn btn-primary" type="button"><i class="glyphicon glyphicon-folder-open"></i></button>
                </span>
            </div>

          <button id="SavePropic" class="btn btn-primary " type="submit" style="width:220px;"><i class="glyphicon glyphicon-ok-sign"></i> Set as Profile</button>
        </form>
    </div>

    <div class="col-sm-8 pro_info">
        <h3 style="margin-bottom: 3px;">Update Your Personal info</h3>

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#basic">Basic</a></li>
            <li><a data-toggle="tab" href="#pass">Password</a></li>
        </ul>

        <div class="tab-content">
            <div id="basic" class="tab-pane fade in active">
                <br>
                <form class="form-horizontal" role="form" method="post" action="{{route('editProfile.submit')}}">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Your ID:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="{{$Personal->student_id}}" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">First name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" name="fname" value="{{$Personal->fname}}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Last name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" name="lname" value="{{$Personal->lname}}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="email" name="email" value="{{$Personal->email}}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Your Year:</label>
                    <div class="col-lg-8">
                      <div class="ui-select">
                        <select id="user_time_zone" name="year" class="form-control" required>
                          <option style="color: black" value="1'st">1st Year</option>
                          <option style="color: black" value="2'nd">2nd Year</option>
                          <option style="color: black" value="3'rd" selected>3rd Year</option>
                          <option style="color: black" value="4'th">4th Year</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Contact No:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" name="phone" value="{{$Personal->phone}}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                      <input type="submit" class="btn btn-primary" value="Update Profile">
                      <span></span>
                      {{-- <input type="reset" class="btn btn-default" value="Cancel"> --}}
                    </div>
                  </div>
                </form>
                <br>
                <br>
                <br>
                <br>
            </div>


            <div id="pass" class="tab-pane fade">
                <br>
                <form class="form-horizontal" role="form" method="post" action="{{route('change_password.submit')}}">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                     <div class="form-group">
                        <label class="col-md-3 control-label">Old Password:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="password" value="" name="old_password" placeholder="Enter Old Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="password" value="" name="password" placeholder="Enter New Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Confirm password:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="password" value="" name="password_confirmation" placeholder="Confirm New Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                          <input type="submit" class="btn btn-primary" value="Update Password">
                          <span></span>
                          {{-- <input type="reset" class="btn btn-default" value="Cancel"> --}}
                        </div>
                    </div>
                </form>
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
        </div>
    </div>

</div>
@endsection 

