<!DOCTYPE html>
<html>
  <head>
    {{--Every child page should inject page title through section name title--}}
    @include('partials.MainPartials._head')
    @section('title', '| Registration') <!-- title isn't working-->
  </head>

  <body>
     @include('partials.MainPartials._navigation')
      <div id="registrationBody" class="container-fluid">
        <h1><center>Basic registration form</center></h1>
      </div>

   <div class="container-fluid">
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
	  	  
	  <button type="submit" class="btn btn-primary btn-block">Submit</button>
	</form>

	</div> 
	</div> <!-- container-fluid-->
  </body>
</html>
