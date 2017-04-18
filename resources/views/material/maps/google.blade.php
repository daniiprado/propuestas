@extends('material.layouts.material')

@section('title', '- Google Map')

@section('navbar')
  @include('material.partials.navbar', ['title' => 'Google Map'])
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-text" data-background-color="rose">
          <h4 class="card-title">Satellite Map</h4>
        </div>
        <div class="card-content">
          <div id="satelliteMap" class="map map-big"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
          <i class="material-icons">add_location</i>
        </div>
        <div class="card-content">
          <h4 class="card-title">Regular Map</h4>
          <div id="regularMap" class="map"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
          <i class="material-icons">room</i>
        </div>
        <div class="card-content">
          <h4 class="card-title">Custom Skin & Settings Map</h4>
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
    $(document).ready(function() {
      demo.initSmallGoogleMaps();
    });
  </script>
@endpush