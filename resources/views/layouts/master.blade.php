<!DOCTYPE html>
<html lang="en">
   <head>
      @include('layouts.head')
   </head>
   <body class="nav-md">
      <div class="container body">
         <div class="main_container">
            @include('layouts.sidebar')
            <!-- top navigation -->
            @include('layouts.top-nav')
            <!-- /top navigation -->


            @yield('mainContent')
           
            <!-- footer content -->
           @include('layouts.footer')
            <!-- /footer content -->
         </div>
      </div>
      <!-- jQuery -->
     @include('layouts.foot')
   </body>
</html>