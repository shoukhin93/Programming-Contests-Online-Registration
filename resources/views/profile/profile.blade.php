@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
	Profile
@endsection

@section('OuterInclude')
	<link href="{{ asset('css/profile.css') }}" rel="stylesheet" >
@endsection

{{-- Main Profile View --}}
@section('ContentOfBody') 
<div class="container pro_cls">
	<div class=" col-sm-12 pro_head">
	<h2> <strong>Rakul's</strong> Profile</h2>	
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
              <td>Phon:</td>
              <td>01915770274</td>
            </tr>
          </tbody>
        </table>
	</div>
</div>
<div class="container">
	<div class="col-sm-12 pro_head">
	<h2>Contest Activity</h2>	
	</div>
  <div class="col-sm-12">
  
  </div>
</div>
@endsection 

	