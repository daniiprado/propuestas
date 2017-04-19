@extends('paper.layouts.paper')

@section('title', '- Vector Maps')

@section('navbar', 'Vector Maps')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-center">
        World Map<br />
        <small>
          Looks great on any resolution. Made by our friends from <a target="_blank" href="http://jvectormap.com/">jVector Map</a>.
        </small>
      </h3>
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
<script src="{{ asset('paper/assets/js/jquery-jvectormap.js') }}"></script>
@endpush


@push('functions')
  <!--  Vector Maps Init    -->
<script>
  $().ready(function(){
    demo.initVectorMap();
  });
</script>
@endpush