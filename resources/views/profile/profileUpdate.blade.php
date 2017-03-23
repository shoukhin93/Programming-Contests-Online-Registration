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

  <div class="col-sm-6">
    <form>
        <div class="form-group form-inline">
          <label for="usrID"><strong>User ID:</strong></label>
          <input type="text" class="form-control" id="usrID">
        </div>
        <div class="form-group form-inline">
          <label for="FirstName">First Name:</label>
          <input type="text" class="form-control" id="FirstName" placeholder="Rakul Preet">
        </div>
        <div class="form-group form-inline">
          <label for="LastName">Last Name:</label>
          <input type="text" class="form-control" id="LastName" placeholder="Sing">
        </div>
        <div class="form-group form-inline">
          <label for="year">Your Year:</label>
          <select id="year" name="studentYear" class="form-control">
            <option style="color: black" value="1">1st Year</option>
            <option style="color: black" value="2">2nd Year</option>
            <option style="color: black" value="3" selected>3rd Year</option>
            <option style="color: black" value="4">4th Year</option>
          </select>
      </div>
      <div class="form-group form-inline">
        <label for="email"> Your Email:</label>
        <input type="email" class="form-control" id="email" placeholder="info@something.com">
      </div>

    </form>
  </div>

  <div class="col-sm-6">
    
  </div>
</div>
@endsection 

