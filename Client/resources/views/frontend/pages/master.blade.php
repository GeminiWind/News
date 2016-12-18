<!DOCTYPE html>
<html>
<head>
  <title>The News</title>
  <link href="{{url('frontend/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
  <!-- Custom Theme files -->
  <link href="{{url('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
  <!-- Custom Theme files -->
  <script src="{{url('frontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{url('frontend/js/jquery.leanModal.min.js')}}"></script>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
  <!-- Custom Theme files -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0); }, false);
      function hideURLbar(){ window.scrollTo(0,1); }
  </script>
  <!--webfont-->
   <script src="{{ url('frontend/js/sweetalert.min.js') }}"></script>
   <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/sweetalert.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/jquery.typeahead.css') }}">
   <script type="text/javascript" src="{{url('frontend/js/jquery.typeahead.js')}}"></script>
   <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/search.css') }}">
   <script type="text/javascript" src="{{url('frontend/js/search.js')}}"></script>
</head>
<body>
  @include('frontend._partial.top')
  @yield('content')
  @include('frontend._partial.sidebar')
  @include('frontend._partial.bottom')
  @yield('extra-script')
</body>
</html>
