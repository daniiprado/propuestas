@extends('light.layouts.fullscren')

@section('title', '- Fullscreen Maps')
@section('navbar', 'Fullscreen Maps')

@section('content')
  <div id="map" class="full-screen-map"></div>
@endsection

@push('scripts')
<!--  Google Maps Plugin    -->
<script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBMStVULXeaBCSuNOlg7f0D_PZQLfGqDqo') }}"></script>
@endpush

@push('functions')
<script>
  $().ready(function(){
    demo.initFullScreenGoogleMap();
  });
</script>
@endpush