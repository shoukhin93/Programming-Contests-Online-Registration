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
                <li class="Home"><a href="home">Home</a></li>
                <li class="Contests"><a href="#">Contests</a></li>
                <li class="Results"><a href="contest_result">Results</a></li>
                <!--Admin dropdown starts -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="arrange_contest">Add Contest</a></li>
                        <li><a href="edit_contest">Modify Contest</a></li>
                        <li><a href="member_request">Accept Request</a></li>
                    </ul>
                </li> <!--Admin dropdown ends -->
                <li class="accept_team"><a href="registered_team">Accepted Team</a></li>
                <li class="Search">
                    <form class="navbar-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </li>
            </ul> <!--Left navigation ends -->


            <!--Right navigation start -->
            <ul class="nav navbar-nav navbar-right my-menu">
                <li><a href="#" data-toggle="modal"
                       data-target="#signinModal">Login</a></li>
                <li><a href="user_registration">Register</a></li>
            </ul> <!--Right navigation ends -->

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

@include('login.login') <!-- Login modal -->