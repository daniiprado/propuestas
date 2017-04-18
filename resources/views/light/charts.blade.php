@extends('light.layouts.light')

@section('title', '- Charts')
@section('navbar', 'Charts')

@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="header">
          24 Hours Performance
          <p class="category">Line Chart</p>
        </div>
        <div class="content">
          <div id="chartPerformance" class="ct-chart "></div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="header">
          NASDAQ: AAPL
          <p class="category">Line Chart with Points</p>
        </div>
        <div class="content">
          <div id="chartStock" class="ct-chart "></div>
        </div>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="header">
          Users Behavior
          <p class="category">Multiple Lines Charts</p>
        </div>
        <div class="content">
          <div id="chartBehaviour" class="ct-chart "></div>
        </div>
        <div class="footer">
          <h6>Legend</h6>
          <i class="fa fa-circle text-info"></i> Visited Site
          <i class="fa fa-circle text-danger"></i> Register
          <i class="fa fa-circle text-warning"></i> Login 2nd time
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="header">
          Public Preferences
          <p class="category">Pie Chart</p>
        </div>
        <div class="content">
          <div id="chartPreferences" class="ct-chart "></div>
        </div>
        <div class="footer">
          <h6>Legend</h6>
          <i class="fa fa-circle text-info"></i> Apple
          <i class="fa fa-circle text-warning"></i> Samsung
          <i class="fa fa-circle text-danger"></i> Windows Phone
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="header">
          Views
          <p class="category">Bar Chart</p>
        </div>
        <div class="content">
          <div id="chartViews" class="ct-chart "></div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="header">
          Activity
          <p class="category">Multiple Bars Chart</p>
        </div>
        <div class="content">
          <div id="chartActivity" class="ct-chart "></div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<!--  Charts Plugin -->
<script src="{{ asset('light/assets/js/chartist.min.js') }}"></script>
@endpush

@push('functions')
  <script type="text/javascript">
    $().ready(function(){
      demo.initCharts();
    });
  </script>
@endpush