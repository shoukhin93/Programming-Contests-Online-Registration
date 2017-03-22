<!DOCTYPE html>
<html>
  <head>
    {{--Every child page should inject page title through section name title--}}
    @include('partials.MainPartials._head')
    @yield('OuterInclude')
  </head>

  <body>
     @include('partials.MainPartials._navigation')
      <hr>
      <div id="ContentOfBody" class="container-fluid">
        @yield('ContentOfBody')
       {{-- <h1><center>Here we Just add Our Content</center></h1> --}}
        <!--<button class="btn btn-default one">Button</button>
        <button class="btn btn-default two">Button1</button>-->
      </div>
      <footer class="navbar-fixed-bottom clearfix">
            <p>monmoy jaggesher and shoukhin all rights reserved</p>
      </footer>
  </body>
 
</html>
