<!DOCTYPE html>
<html>
  <head>
    {{--Every child page should inject page title through section name title--}}
    @include('partials.MainPartials._head')
    @yield('OuterInclude')
    <style type="text/css">
      #ContentOfBody{
        bottom: 0;
        left: 0;
        position: relative;
        right: 0;
        top: 0;
        min-height: 100vh;
      }
    </style>
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
