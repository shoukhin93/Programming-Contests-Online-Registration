@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
  Notifications
@endsection

@section('OuterInclude')
  <link href="{{ asset('css/notifications.css') }}" rel="stylesheet" >
  {{-- <script src="{{ asset('js/profile_update.js') }}"></script> --}}
@endsection


@section('ContentOfBody')
  <div class="container">
  <br>
    <div class="col-sm-12 clearfix">
        <ul class="nav nav-tabs">

          <li class="active"><a data-toggle="tab" href="#Invitations">Invitations</a></li>
          <li><a data-toggle="tab" href="#Message">Message</a></li>
        </ul>

        <div class=" tab-content list-group well">

          <div id="Invitations" class="tab-pane fade in active">
            <a href="#" class="list-group-item">
              <p>REQUEST GOES HERE</p>
            </a>

            <a href="#" class="list-group-item">
              <p>REQUEST GOES HERE</p>
            </a>

             <a href="#" class="list-group-item">
              <p>REQUEST GOES HERE</p>
            </a>

            <a href="#" class="list-group-item">
             <p>REQUEST GOES HERE</p>
            </a>
          </div>


          <div id="Message" class="tab-pane fade">
            <a href="#" class="list-group-item">
              <p>Your Team Status Pending</p>
            </a>

            <a href="#" class="list-group-item">
              <p>Member 1 Accept member Request</p>
            </a>

             <a href="#" class="list-group-item">
              <p>Member 2 Accept member Request</p>
            </a>

            <a href="#" class="list-group-item">
             <p>Member 3 Accept member Request</p>
            </a>
          </div>

          

        </div> 
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
@endsection 

