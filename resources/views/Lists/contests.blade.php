@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
  Member Request
@endsection

@section('OuterInclude')
  <link href="{{ asset('css/contests.css') }}" rel="stylesheet" >
@endsection

@section('ContentOfBody')

{{-- Main Member Request View --}}
<div class="container">
	<div class="row">
	    <div class="col-sm-12 mem_head clearfix">
	        <h2>ALL CONTEST</h2>
	    </div>
	</div>
	<div class="list-group">
		<a href="#" class="list-group-item">
			<h3 class="list-group-item-heading">Rajshahi University Inter Dept Programming Contest</h3>
			<span class="pull-right label label-success">Running..</span>
			<p class="list-group-item-text">26-Mar-2017 11.30 AM</p>
		</a>
		<a href="#" class="list-group-item">
			<h3 class="list-group-item-heading">Rajshahi University Inter Dept Programming Contest 01</h3>
			<span class="pull-right label label-info">Finished</span>
			<p class="list-group-item-text">26-Mar-2017 11.30 AM</p>
		</a>
		<a href="#" class="list-group-item">
			<h3 class="list-group-item-heading">Rajshahi University Inter Dept Programming Contest 02</h3>
			<span class="pull-right label label-info">Finished</span>
			<p class="list-group-item-text">26-Mar-2017 11.30 AM</p>
		</a>
		<a href="#" class="list-group-item">
			<h3 class="list-group-item-heading">Rajshahi University Team Selection Contest 01</h3>
			<span class="pull-right label label-info">Finished</span>
			<p class="list-group-item-text">26-Mar-2017 11.30 AM</p>
		</a>
		<a href="#" class="list-group-item">
			<h3 class="list-group-item-heading">Rajshahi University Inter Dept Programming Contest</h3>
			<span class="pull-right label label-info">Finished</span>
			<p class="list-group-item-text">26-Mar-2017 11.30 AM</p>
		</a>
		<a href="#" class="list-group-item">
			<h3 class="list-group-item-heading">Rajshahi University Inter Dept Programming Contest</h3>
			<span class="pull-right label label-info">Finished</span>
			<p class="list-group-item-text">26-Mar-2017 11.30 AM</p>
		</a>
		<a href="#" class="list-group-item">
			<h3 class="list-group-item-heading">Rajshahi University Inter Dept Programming Contest</h3>
			<span class="pull-right label label-info">Finished</span>
			<p class="list-group-item-text">26-Mar-2017 11.30 AM</p>
		</a>
		<a href="#" class="list-group-item">
			<h3 class="list-group-item-heading">Rajshahi University Inter Dept Programming Contest</h3>
			<span class="pull-right label label-info">Finished</span>
			<p class="list-group-item-text">26-Mar-2017 11.30 AM</p>
		</a>
		<a href="#" class="list-group-item">
			<h3 class="list-group-item-heading">Rajshahi University Inter Dept Programming Contest</h3>
			<span class="pull-right label label-info">Finished</span>
			<p class="list-group-item-text">26-Mar-2017 11.30 AM</p>
		</a>
	</div>
	<div class="Pagination-section">
		<ul class="pagination">
		<li></li>
	   {{--  <li><a href="#"><span class="glyphicon glyphicon-backward"> </a></li> --}}
	    <li class="active"><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li><a href="#">4</a></li>
	    <li><a href="#">5</a></li>
	   {{--  <li><a href="#"><span class="glyphicon glyphicon-forward"> </a></li> --}}
	    <li></li>
	  </ul>
	</div>
	 
</div>
@endsection 

