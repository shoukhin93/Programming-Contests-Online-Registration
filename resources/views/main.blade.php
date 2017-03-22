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
      </div>
      <footer class="clearfix">
            <p>monmoy jaggesher and shoukhin all rights reserved</p>
      </footer>
  </body>
 
</html>
