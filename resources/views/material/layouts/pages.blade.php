<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8"/>
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('material/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('material/assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

  <title>C.I.T. @yield('title')</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
  <meta name="viewport" content="width=device-width"/>

  <!-- Headers Start -->
    @include('material.partials.header')
  <!-- Headers Ends -->

</head>
<body>

  <!-- Navbar Start -->
    @include('material.partials.pages-nav')
  <!-- Navbar Ends -->

  <div class="wrapper wrapper-full-page">
    <div class="full-page @yield('page-class') login-page" filter-color="@yield('page-color')" data-image="@yield('page-image')">
      <!-- Content Start -->
        @yield('content')
      <!-- Content Ends -->

      <!-- Footer Start -->
        @include('material.partials.footer')
      <!-- Footer Ends -->
    </div>
  </div>

  <!-- Plugin Start -->
    @include('material.partials.page-plugin')
  <!-- Plugin Ends -->
</body>

<!-- Scripts Starts -->

<!--   Core JS Files   -->
<script src="{{asset('material/assets/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('material/assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('material/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('material/assets/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('material/assets/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>

<!-- Custom Scripts Start -->
@stack('scripts')
<!-- Custom Scripts Ends -->

<!-- TagsInput Plugin -->
<script src="{{ asset('material/assets/js/jquery.tagsinput.js') }}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('material/assets/js/material-dashboard.js')}}" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('material/assets/js/demo.js')}}" type="text/javascript"></script>

{{-- <script src="{{asset('material/assets/js/')}}" type="text/javascript"></script> --}}

<!-- Custom Functions Start -->
<script type="text/javascript">
  $().ready(function() {
    demo.checkFullPageBackgroundImage();

    setTimeout(function() {
      // after 1000 ms we add the class animated to the login/register card
      $('.card').removeClass('card-hidden');
    }, 700)
  });
</script>
<!-- Custom Functions Ends -->

<!-- Scripts Ends -->

</html>