@extends('paper.layouts.paper')

@section('title', '- Full Screen Maps')

@section('navbar', 'Full Screen Maps')

@section('content')
  <div class="card card-map">
    <div class="card-header">
      <h4 class="card-title">Full Screen Map</h4>
    </div>
    <div id="map" class="full-screen-map"></div>
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
    demo.initFullScreenGoogleMap();
  });
</script>
@endpush