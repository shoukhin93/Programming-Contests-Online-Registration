@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
  Profile
@endsection

@section('OuterInclude')
  <link href="{{ asset('css/profile_update.css') }}" rel="stylesheet" >
@endsection


@section('ContentOfBody')

{{-- Main Profile View --}}
<div class="container">
  <div class=" col-sm-12 pro_head">
    <h2>Update Profie</h2>
  </div>

  <div class="col-sm-4 pro_image" align="center">
    <img  id="" src="{{ asset('image/RakulPreet.jpg') }}" class="img-thumbnail clearfix" alt="Profile Pic" width="200" height="200">
    <button type="button" class="btn btn-default" style="width:200px;">Upload new picture</button>
  </div>

  <div class="col-sm-8 pro_info">
  <h3>Update Your Personal info</h3>
    <form class="form-horizontal" role="form">

      <div class="form-group">
        <label class="col-lg-3 control-label">Your ID:</label>
        <div class="col-lg-8">
          <input class="form-control" type="text" value="14025423" readonly>
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-3 control-label">First name:</label>
        <div class="col-lg-8">
          <input class="form-control" type="text" value="Rakul Preet">
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-3 control-label">Last name:</label>
        <div class="col-lg-8">
          <input class="form-control" type="text" value="Sing">
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-3 control-label">Email:</label>
        <div class="col-lg-8">
          <input class="form-control" type="email" value="info@something.com">
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-3 control-label">Your Year:</label>
        <div class="col-lg-8">
          <div class="ui-select">
            <select id="user_time_zone" class="form-control">
              <option style="color: black" value="1">1st Year</option>
              <option style="color: black" value="2">2nd Year</option>
              <option style="color: black" value="3" selected>3rd Year</option>
              <option style="color: black" value="4">4th Year</option>
            </select>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-3 control-label">Contact No:</label>
        <div class="col-lg-8">
          <input class="form-control" type="text" value="01915770274">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label">Password:</label>
        <div class="col-md-8">
          <input class="form-control" type="password" value="" placeholder="Enter New Password">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Confirm password:</label>
        <div class="col-md-8">
          <input class="form-control" type="password" value="" placeholder="Confirm New Password">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-8">
          <input type="button" class="btn btn-primary" value="Update Profile">
          <span></span>
          {{-- <input type="reset" class="btn btn-default" value="Cancel"> --}}
        </div>
      </div>
    </form>
  </div>

</div>
@endsection 

