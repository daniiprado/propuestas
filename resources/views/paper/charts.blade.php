@extends('paper.layouts.paper')
@section('title', '- Charts')
@section('navbar', 'Charts')

@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">24 Hours Performance</h4>
          <p class="category">Line Chart</p>
        </div>
        <div class="card-content">
          <div id="chartPerformance"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">NASDAQ: AAPL</h4>
          <p class="category">Line Chart with Points</p>
        </div>
        <div class="card-content">
          <div id="chartStock"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Views</h4>
          <p class="category">Bar Chart</p>
        </div>
        <div class="card-content">
          <div id="chartViews"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Activity</h4>
          <p class="category">Multiple Bars Chart</p>
        </div>
        <div class="card-content">
          <div id="chartActivity"></div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<!--  Charts Plugin -->
<script src="{{ asset('paper/assets/js/chartist.min.js') }}"></script>
@endpush

@push('functions')
<script type="text/javascript">
  $(document).ready(function(){
    demo.initChartsPage();
  });
</script>
@endpush