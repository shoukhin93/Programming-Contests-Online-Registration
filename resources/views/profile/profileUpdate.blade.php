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
       
          @if ($errors->has('fileToUpload'))
            <div class="alert alert-danger">
              <span class="help-block">
                  <strong>{{ $errors->first('fileToUpload') }}</strong>
              </span>
            </div>
          @endif
          @if (Session::has('wrong'))
            <div class="alert alert-danger">
              <span class="wrong">
                <strong> {{ Session::get('wrong') }}</strong>
              </span>
            </div>
          @endif
        
    </div>

    <div class="col-sm-8 pro_info">
      @if(count($errors) > 0 || Session::has('no_match'))
        <p id="fail" style="margin-bottom: 3px; text-align: center;" class="alert alert-danger"><strong>FAIL</strong>, Please fill information correctly</p>
      @endif
        <h3 style="margin-bottom: 3px;">Update Your Personal info </h3> 

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

                  <div class="form-group {{ $errors->has('userFirstName') ? ' has-error' : '' }}">
                    <label class="col-lg-3 control-label">First name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" name="userFirstName" placeholder="First Name" value="{{$Personal->fname}}" required>
                      @if ($errors->has('userFirstName'))
                        <span class="help-block">
                            <strong>{{ $errors->first('userFirstName') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group {{ $errors->has('userLastName') ? ' has-error' : '' }}">
                    <label class="col-lg-3 control-label">Last name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" placeholder="Last Name" name='userLastName' value="{{$Personal->lname}}" required>
                       @if ($errors->has('userLastName'))
                        <span class="help-block">
                            <strong>{{ $errors->first('userLastName') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="email" name="email" placeholder="Enter Email" value="{{$Personal->email}}" readonly>
                       @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group {{ $errors->has('studentYear') ? ' has-error' : '' }}">
                    <label class="col-lg-3 control-label">Your Year:</label>
                    <div class="col-lg-8">
                      <div class="ui-select">
                        <select id="user_time_zone" name="studentYear" class="form-control" required>
                          <option style="color: black" value="1'st" @if($Personal->year=="1'st") selected @endif>1st Year</option>
                          <option style="color: black" value="2'nd" @if($Personal->year=="2'nd") selected @endif>2nd Year</option>
                          <option style="color: black" value="3'rd" @if($Personal->year=="3'rd") selected @endif>3rd Year</option>
                          <option style="color: black" value="4'th" @if($Personal->year=="4'th") selected @endif>4th Year</option>
                        </select>
                      </div>
                       @if ($errors->has('studentYear'))
                        <span class="help-block">
                            <strong>{{ $errors->first('studentYear') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group {{ $errors->has('userContactNo') ? ' has-error' : '' }}">
                    <label class="col-lg-3 control-label">Contact No:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" name="userContactNo" value="{{$Personal->phone}}" required>
                      @if ($errors->has('userContactNo'))
                        <br>
                        <span class="help-block">
                            <strong>{{ $errors->first('userContactNo') }}</strong>
                        </span>
                      @endif
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
                     <div class="form-group {{ $errors->has('old_password') ? ' has-error' : '' }} @if(Session::has('no_match')) has-error @endif">
                        <label class="col-md-3 control-label">Old Password:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="password" value="" name="old_password" placeholder="Enter Old Password" required>
                          @if ($errors->has('old_password'))
                            <br>
                            <span class="help-block">
                                <strong>{{ $errors->first('old_password') }}</strong>
                            </span>
                          @endif
                           @if (Session::has('no_match'))
                            <br>
                            <span class="help-block">
                                <strong> {{ Session::get('no_match') }}</strong>
                            </span>
                          @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">Password:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="password" value="" name="password" placeholder="Enter New Password" required>
                          @if ($errors->has('password'))
                            <br>
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                          @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">Confirm password:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="password" value="" name="password_confirmation" placeholder="Confirm New Password" required>
                          @if ($errors->has('password'))
                            <br>
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                          @endif
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

