@extends('main')

@section('title')
	Registration
@endsection 

@section('OuterInclude')
	<link href="{{ asset('css/user_registration.css') }}" rel="stylesheet" >
@endsection


 @section('ContentOfBody')

<div class = "registrationBody">

  <div class="row">
  <h1><center>Registration Form</center></h1>
  <div class="col-sm-1"></div>
   <div class="col-sm-5"> 
   <div class="jumbotron">
    <h2>Welcome to registration page</h2>  <br>    
    <p>Fill the data correctly and wait for admin to confirm your registration</p>
    <p>Already have an account? try <a href="#" data-toggle="modal" data-target="#signinModal">Sign in</a></p>
  </div>
  </div>
  <div class="col-sm-2"></div>
   <div class="col-sm-3">   
	  <form>
		<div class="form-group">
		    <input type="text" class="form-control" id="userFirstName" placeholder="First Name">
		 </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="userLastName" placeholder="Last Name">
		  </div>
		<div class="form-group">
		    <input type="text" class="form-control" id="userID"  placeholder="Enter Student ID">
		  </div>
		  <div class="form-group">
		    <input type="password" class="form-control" id="pwd" placeholder="password">
		  </div>
		  <div class="form-group">
		    <input type="password" class="form-control" id="cpwd" placeholder="Re-type password">
		  </div>
		  <div class="form-group">
		    <input type="email" class="form-control" id="email" placeholder="Enter Email">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="userContactNo" placeholder="Contact No.">
		  </div>
			<div class="form-group">
			<label for="male">Gender : </label>
		  <label class="radio-inline">
	           <input type="radio" name="male">Male
	      </label>
	    <label class="radio-inline">
	      		<input type="radio" name="female">Female
	    </label>
	    </div>
		  	  
		  <button type="submit" class="btn btn-primary btn-block">Submit</button>
		</form>

	</div> 
	</div>
	</div>


@include('login.login')


@endsection
  
