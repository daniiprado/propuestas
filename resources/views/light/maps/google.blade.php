@extends('light.layouts.light')

@section('title', '- Google')
@section('navbar', 'Google')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <p class="category">Satellite Map</p>
        </div>
        <div class="content">
          <div id="satelliteMap" class="map map-big"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="header">
          <p class="category">Regular Map</p>
        </div>
        <div class="content">
          <div id="regularMap" class="map"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="header">
          <p class="category">Custom Skin & Settings Map</p>
        </div>
        <div class="content">
          <div id="customSkinMap" class="map"></div>
        </div>
      </div>
    </div>

  </div>
@endsection

@push('scripts')
<!--  Google Maps Plugin    -->
<script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBMStVULXeaBCSuNOlg7f0D_PZQLfGqDqo') }}"></script>
@endpush

@push('functions')
<script>
  $().ready(function(){
    demo.initSmallGoogleMaps();
  });
</script>
@endpush