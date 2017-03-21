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
	    <label for="userName">Name:</label>
	    <input type="text" class="form-control" id="userName">
	  </div>
	<div class="form-group">
	    <label for="userID">User ID:</label>
	    <input type="text" class="form-control" id="userID">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control" id="pwd">
	  </div>
	  <div class="form-group">
	    <label for="cpwd">Confirm Password:</label>
	    <input type="password" class="form-control" id="cpwd">
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" id="email">
	  </div>
	  	  
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>

	</div> 
	</div> <!-- container-fluid-->
  </body>
</html>
