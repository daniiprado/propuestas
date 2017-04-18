@extends('paper.layouts.paper')

@section('title', '- Mapas')

@section('navbar')
  @include('paper.components.navbar', ['title' => 'Mapas'])
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-map">
        <div class="card-header">
          <h4 class="card-title">Satellite Map</h4>
        </div>
        <div class="card-content">
          <div id="satelliteMap" class="map map-big"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Regular Map</h4>
        </div>
        <div class="card-content">
          <div id="regularMap" class="map"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Custom Skin & Settings Map</h4>
        </div>
        <div class="card-content">
          <div id="customSkinMap" class="map"></div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMStVULXeaBCSuNOlg7f0D_PZQLfGqDqo"></script>
@endpush


@push('functions')
  <!--  Google Maps Init    -->
<script>
  $().ready(function(){
    demo.initGoogleMaps();
    demo.initSmallGoogleMaps();
  });
</script>
@endpush