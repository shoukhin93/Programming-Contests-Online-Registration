@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
	Profile
@endsection

@section('OuterInclude')
	<link href="{{ asset('css/profile.css') }}" rel="stylesheet" >
  <script src="{{ asset('js/profile.js') }}"></script>
@endsection


@section('ContentOfBody')

{{-- Main Profile View --}}
<div class="container">
	<div class=" col-sm-12 pro_head clearfix">
	<h2 class="pull-left"> <strong>{{$Personal->fname}}'s</strong> Profile</h2>
  <h2 class="pull-right">
    @if(Auth::guard('web')->check() && Auth::guard('web')->user()->student_id == $Personal->student_id)
    <a href="{{route('editProfile')}}" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
    @endif
  </h2>	
	</div>
	<div class="col-sm-2"></div>
	<div class="col-sm-3" align="center"> 
		<img src="{{ asset($Personal->img) }}" class="img-thumbnail" alt="Profile Pic" width="200" height="200">
		<p class="cls_phn_num"> <span class="glyphicon glyphicon-phone-alt" style="color: #357ed3;"></span> {{$Personal->phone}}</p>
	</div>
	<div class="col-sm-6 pro-info">
	<table class="table info_table">
          <tbody>
            <tr>
              <td><strong>ID:</strong></td>
              <td> <strong>{{$Personal->student_id}}</strong></td>
            </tr>
            <tr>
              <td>Name:</td>
              <td>{{$Personal->fname.' '.$Personal->lname}}</td>
            </tr>
            <tr>
              <td>Gender:</td>
              <td>{{$Personal->gender}}</td>
            </tr>
            <tr>
              <td>Email:</td>
              <td>{{$Personal->email}}</td>
            </tr>
            <tr>
              <td>Year:</td>
              <td>{{$Personal->year}}</td>
            </tr>
            <tr>
              <td>Phone:</td>
              <td>{{$Personal->phone}}</td>
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
          <td><a href="#">#RU22</a></td>
          <td>RU_TITANS</td>
          <td>2</td>
        </tr>
      </tbody>

    </table>

    </br>
    </br>
  </div>
</div>
@endsection 

	