@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
	Profile
@endsection

@section('OuterInclude')
	<link href="{{ asset('css/profile.css') }}" rel="stylesheet" >
@endsection


@section('ContentOfBody')

{{-- Main Profile View --}}
<div class="container pro_cls">
	<div class=" col-sm-12 pro_head">
	<h2 class="pull-left"> <strong>Rakul's</strong> Profile</h2>
  <h2 class="pull-right">
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
  </h2>	
	</div>
	<div class="col-sm-2"></div>
	<div class="col-sm-3" align="center"> 
		<img src="{{ asset('image/RakulPreet.jpg') }}" class="img-thumbnail" alt="Profile Pic" width="200" height="200">
		<p class="cls_phn_num"> <span class="glyphicon glyphicon-phone-alt" style="color: #357ed3;"></span> 01915770274</p>
	</div>
	<div class="col-sm-6 pro-info">
	<table class="table info_table">
          <tbody>
            <tr>
              <td><strong>ID:</strong></td>
              <td> <strong>14025423</strong></td>
            </tr>
            <tr>
              <td>Name:</td>
              <td>Rakul Preet Sing</td>
            </tr>
            <tr>
              <td>Gender:</td>
              <td>Female</td>
            </tr>
            <tr>
              <td>Email:</td>
              <td>info@something.com</td>
            </tr>
            <tr>
              <td>Year:</td>
              <td>3'rd</td>
            </tr>
            <tr>
              <td>Phone:</td>
              <td>01915770274</td>
            </tr>
          </tbody>
        </table>
	</div>
</div>

{{-- This Section For COntest Log --}}
<div class="container"> 
	<div class="col-sm-12 pro_head">
	<h2>Contest Activity</h2>	
	</div>
  <div class="col-sm-12 contest_table">
    <table class="table contest_info_table">
      <thead>
      <tr>
        <td>Contest ID</td>
        <td>Team Name</td>
        <td>Rank</td>
      </tr>
      </thead>

      <tbody>
        <tr>
          <td><a href="#">#RU1</a></td>
          <td>RU_BottomUp</td>
          <td>1</td>
        </tr>

        <tr>
          <td><a href="#">#RU2</a></td>
          <td>RU_BottomUp</td>
          <td>2</td>
        </tr>
        <tr>
          <td><a href="#">#RU2</a></td>
          <td>RU_BottomUp</td>
          <td>2</td>
        </tr>
        <tr>
          <td><a href="#">#RU2</a></td>
          <td>RU_BottomUp</td>
          <td>2</td>
        </tr>
        <tr>
          <td><a href="#">#RU322</a></td>
          <td>RU_Mala_Boro_Name</td>
          <td>0</td>
        </tr>
      </tbody>

    </table>

    </br>
    </br>
  </div>
</div>


<script>
  $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
  });
</script>

@endsection 

	