<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8"/>
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('light/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('light/assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

  <title>C.I.T. @yield('title')</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
  <meta name="viewport" content="width=device-width"/>

  <!-- Headers Start -->
    @include('light.partials.header')
  <!-- Headers Ends -->

</head>
<body>

<!-- Navbar Start -->
@yield('navbar')
<!-- Navbar Ends -->

<div class="wrapper wrapper-full-page">
  <div class="full-page @yield('page-class')" data-color="@yield('page-color')" data-image="@yield('page-image')">
    <!-- Content Start -->
      @yield('content')
    <!-- Content Ends -->
    <!-- Footer Start -->
      @include('light.partials.footer-page')
    <!-- Footer Ends -->
  </div>
</div>

<!-- Plugin Start -->
@include('light.partials.page-plugin')
<!-- Plugin Ends -->

</body>

<!-- Scripts Starts -->

<!--   Core JS Files   -->
<script src="{{ asset('light/assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('light/assets/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}" type="text/javascript"></script>


<!-- Custom Scripts Start -->
@stack('scripts')
<!-- Custom Scripts Ends -->

<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
<script src="{{ asset('light/assets/js/bootstrap-checkbox-radio-switch-tags.js') }}"></script>

<!-- Light Bootstrap Dashboard Core javascript and methods -->
<script src="{{ asset('light/assets/js/light-bootstrap-dashboard.js') }}"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('light/assets/js/demo.js') }}"></script>

<!-- Custom Functions Start -->
@stack('functions')
<!-- Custom Functions Ends -->

<!-- Scripts Ends -->

</html>