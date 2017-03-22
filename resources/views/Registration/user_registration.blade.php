@extends('main')

@section('title')
	Registration
@endsection 

@section('OuterInclude')
	<style type="text/css"></style>
@endsection


 @section('ContentOfBody')

<div class = "registrationBody">
  <div class="row">
   <div class="col-sm-8"> </div>
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
@endsection
  
