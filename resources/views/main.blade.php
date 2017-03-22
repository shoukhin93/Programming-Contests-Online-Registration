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
        <!--The entire content div should be given padding 10px-->
        @yield('ContentOfBody')
      </div>
      <footer class="clearfix">
            <small>monmoy jaggesher and shoukhin all rights reserved</small>
      </footer>
  </body>
 
</html>
