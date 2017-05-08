<nav class="navbar navbar-default my-nav">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fullNavbar"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="#">Brand</a>-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="fullNavbar">
            <!--Left navigation start -->
            <ul class="nav navbar-nav my-menu">
                <li class="Home"><a href="/">Home</a></li>
                <li class="Contests"><a href="/contests">Contests</a></li>
                <li class="Results"><a href="/contest_result">Results</a></li>
                
                @if(Auth::guard('admin')->check())
                    <!--Admin dropdown starts -->
                     <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/arrange_contest">Add Contest</a></li>
                        <li><a href="/edit_contest">Modify Contest</a></li>
                        <li><a href="/member_request">Accept Request</a></li>
                    </ul>
                    </li> <!--Admin dropdown ends -->
               @endif

                <li class="accept_team"><a href="/registered_team">Accepted Team</a></li>
                  
                  @if(Auth::guard('admin')->check() || Auth::check())
                    <li class="Search ">
                        <form class="navbar-form">
                            <input type="text" name = "input" id="input" class ="form-control" placeholder="search">
                            <div id = "roll"></div>
                        </form>
                    </li>
                @endif
                
            </ul> <!--Left navigation ends -->


            <!--Right navigation start -->
            <ul class="nav navbar-nav navbar-right my-menu">
                @if(Auth::guard('web')->check())
                    <li><a href="notifications"><span class="glyphicon glyphicon-bell"></span></a></li>
                    <li><a href="{{route('viewProfile',Auth::guard('web')->user()->student_id)}}">Profile</a></li>
                @endif
                {{-- <li><a href="#" data-toggle="modal"
                       data-target="#signinModal">Login</a></li> --}}
                  @if(Auth::guard('admin')->check())
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/admin/logout"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                  @elseif(Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->fname }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                  @elseif (Auth::guest())
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
              
                @endif
                
            </ul> <!--Right navigation ends -->

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

@include('login.login') <!-- Login modal -->