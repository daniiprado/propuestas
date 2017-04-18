@extends('material.layouts.material')

@section('title', '- Vector Map')

@section('navbar')
  @include('material.partials.navbar', ['title' => 'Vector Map'])
@endsection

@section('content')
  <div class="header text-center">
    <h3 class="title">World Map</h3>
    <p class="category">Looks great on any resolution. Made by our friends from
      <a target="_blank" href="http://jvectormap.com/">jVector Map</a>.</p>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-content">
          <div id="worldMap" class="map map-big"></div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<!-- Vector Map plugin -->
<script src="{{ asset('material/assets/js/jquery-jvectormap.js') }}"></script>
@endpush

@push('functions')
  <script>
    $(document).ready(function() {
      demo.initVectorMap();
    });
  </script>
@endpush