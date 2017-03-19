<!DOCTYPE html>
<html>
  <head>
    {{--Every child page should inject page title through section name title--}}
    @include('partials.MainPartials._head')
  </head>

  <body>
     @include('partials.MainPartials._navigation')
      <div id="ContentOfBody" class="container-fluid">
        <h1><center>Here we Just add Our Content</center></h1>
      </div>
  </body>
</html>
