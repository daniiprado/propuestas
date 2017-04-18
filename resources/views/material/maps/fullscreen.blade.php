@extends('material.layouts.fullmap')

@section('title', '- Fullscreen Map')

@section('navbar')
  @include('material.partials.navbar', ['title' => 'Fullscreen Map'])
@endsection

@section('content')
  <div id="map"></div>
@endsection

@push('scripts')
<!--  Google Maps Plugin    -->
<script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBMStVULXeaBCSuNOlg7f0D_PZQLfGqDqo') }}"></script>
@endpush

@push('functions')
<script type="text/javascript">
  $(document).ready(function() {
    demo.initGoogleMaps();
  });
</script>
@endpush