@extends('main')

@section('title')
	Arrange Contest
@endsection 

@section('OuterInclude')
	<link href="{{ asset('css/user_registration.css') }}" rel="stylesheet" >
@endsection

@section('ContentOfBody')

<div class="registrationBody">
	<div class="row">
		<h1 align="center"> Arrange Contest </h1>
		<p align="center">note: no more than one contest can be arrange at a time</p>
		
	</div>

	<div class="row">
		<div class="col-sm-4"></div>

		<div class="col-sm-4">

		<form>
			<div class="form-group">
				<textarea class="form-control" rows="5" id="comment" placeholder="Description"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block">Submit</button>
			</div>
		</form>
			
		</div>

		<div class="col-sm-4">
			
		</div>
		
	</div>
	
</div>




@endsection
  
