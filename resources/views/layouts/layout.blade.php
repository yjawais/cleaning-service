<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    @include('include.landing.head')

    </head>
    <body>
    @include('include.landing.navbar')
      @yield('content')

    </body>
    @include('include.landing.footer')  
@include('include.landing.script')
</html>