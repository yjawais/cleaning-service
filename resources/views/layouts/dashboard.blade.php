<!doctype html>
<html>
<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('include.dashboard.head')
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
        
    {{-- @include({}})
        --}}
        @yield('sidebar')
  

    <div class="main-content" id="panel">
         <!--  Nav Bar Start -->
        @include('include.dashboard.header')
        <!--  Nav Bar End -->
        <div class="header pb-6">
        </div>
         <!-- sidebar content -->
         <div class="container-fluid mt--6">

            <!--  Main Content Start -->   
            @yield('content')
            <!--  Main Content  End -->
         </div>
   </div>
    {{-- <footer  class="py-5" id="footer-main">
        @include('include.dashboard.footer')
    </footer> --}}

    @include('include.dashboard.scripts')


</body>
</html> 