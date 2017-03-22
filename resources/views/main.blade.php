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
            <hr>
            <p>monmoy jaggesher and shoukhin all rights reserved</p>
            <p>Made For Rajshahi University CSE</p>
            <p>For Registration of contest programming purpose</p>
      </footer>
  </body>
 
</html>
