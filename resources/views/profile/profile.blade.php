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

	<h1>Welcome to profile</h1>
@endsection 