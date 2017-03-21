<!DOCTYPE html>
<html>
  <head>
    {{--Every child page should inject page title through section name title--}}
    @include('partials.MainPartials._head')
    @yield('OuterInclude')
  </head>

  <body>
     @include('partials.MainPartials._navigation')
     img
      <div id="ContentOfBody" class="container-fluid">
        @yield('ContentOfBody')
        <h1>I Am Monmoy</h1>
       {{-- <h1><center>Here we Just add Our Content</center></h1> --}}
      </div>
  </body>
</html>
