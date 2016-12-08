<!DOCTYPE html>
<html lang="en">
@include('partials._head')
  <body>
  <!-- default navbar header menu -->
@include('partials._nav')
    <div class="container">
    	@include('partials._messages')
        @yield('content')

    </div>
@include('partials._footer')
    <!-- end fo cotainer and row -->
@include('partials._javascript')
  
  </body>
</html>