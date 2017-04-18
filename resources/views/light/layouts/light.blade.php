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
<div class="wrapper">

  <!-- Sidebar Start -->
    @include('light.partials.sidebar')
  <!-- Sidebar Ends -->

  <div class="main-panel">

    <!-- Navbar Start -->
      @include('light.partials.navbar')
    <!-- Navbar Ends -->

    <div class="content">
      <div class="container-fluid">
        <!-- Content Start -->
          @yield('content')
        <!-- Content Ends -->
      </div>
    </div>

    <!-- Footer Start -->
  @include('light.partials.footer')
  <!-- Footer Ends -->

  </div>

</div>

<!-- Plugin Start -->
@include('light.partials.plugin')
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