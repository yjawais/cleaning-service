<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    @include('include.landing.user.head')

    </head>
    <body>
    @include('include.landing.user.navbar')
      @yield('content')

      
    </body>
    @include('include.landing.user.footer')  
  @include('include.landing.user.script')
</html>