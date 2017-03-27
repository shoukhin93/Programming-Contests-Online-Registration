@extends('main')

@section('title')
    Home
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/user_registration.css') }}" rel="stylesheet"> <!--to decorate login modal -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <script src="{{ asset('js/home.js') }}"></script>
@endsection

@section('ContentOfBody')

    <div class="cover">
        <div class="cover-text">
            <h1>Welcome To Contest Registration</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <!--<img src="/image/home1.png" alt="HomePage Image" class="img-responsive"> -->
             <div class="add"></div>
            <a href="#contestInformation" class="btn btn-danger" role="button">Click For More Details</a>
        </div>
    </div>

    <div class="wrapper">
        <div class="contest-information" id="contestInformation">
            <h1>Contest information</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>

            <a href="contest_registration" class="btn btn-success" role="button">Click For Registration</a>
            <div class="add"></div>
        </div>
    </div>

@endsection