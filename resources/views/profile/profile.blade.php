@extends('main')

{{-- Including  required CSS/JS/Other --}}
@section('OuterInclude')
	<link href="{{ asset('css/profile.css') }}" rel="stylesheet" >
@endsection

{{-- Main Profile View --}}
@section('ContentOfBody') 

	<h1>Welcome to profile</h1>
@endsection 