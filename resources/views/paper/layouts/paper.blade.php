<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8"/>
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('paper/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('paper/assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

  <title>C.I.T. @yield('title')</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
  <meta name="viewport" content="width=device-width"/>

  <!-- Bootstrap core CSS     -->
  <link href="{{asset('paper/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>

  <!--  Paper Dashboard core CSS    -->
  <link href="{{asset('paper/assets/css/paper-dashboard.css?v=1.2.1')}}" rel="stylesheet"/>

  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="{{asset('paper/assets/css/demo.css')}}" rel="stylesheet"/>

  <!--  Fonts and icons     -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href="{{asset('paper/assets/css/themify-icons.css')}}" rel="stylesheet">

</head>
<body>
<div class="wrapper">
  <!-- Sidebar Start -->
@include('paper.partials.sidebar')
<!-- Sidebar Ends -->

  <div class="main-panel">

    <!-- Navbar Start -->
      @include('paper.partials.navbar')
    <!-- Navbar Ends -->

    <div class="content">
      <div class="container-fluid">
        <!-- Content Start -->
          @yield('content')
        <!-- Content Ends -->
      </div>
    </div>

    <!-- Footer Start -->
      @include('paper.partials.footer')
    <!-- Footer Ends -->

  </div>
</div>

<!-- Footer Start -->
@include('paper.partials.plugin')
<!-- Footer Ends -->

<!--   Core JS Files   -->
<script src="{{asset('paper/assets/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('paper/assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('paper/assets/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('paper/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Switch and Tags Input Plugins -->
<script src="{{asset('paper/assets/js/bootstrap-switch-tags.js')}}"></script>


<!-- Scripts Start -->
@stack('scripts')
<!-- Scripts Ends -->

<!-- Global Custom Scripts Start -->
<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{asset('paper/assets/js/paper-dashboard.js?v=1.2.1')}}"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('paper/assets/js/demo.js')}}"></script>
<!-- Global Custom Scripts Ends -->

<!-- Functions Start -->
@stack('functions')
<!-- Functions Ends -->

</body>
</html>
