<!DOCTYPE html>
<html>
@include('frontend.layout.include.head')
<body>
  @include('frontend.layout.include.header')
  @include('frontend.layout.include.navigation')
  @yield('content')
  @yield('right-sidebar')
<!-- //sidebar  -->
  @include('frontend.layout.include.footer')
  @yield('extra-script')
</body>
</html>
