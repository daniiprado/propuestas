@extends('material.layouts.material')

@section('title', '- Calendario')

@section('navbar')
  @include('material.partials.navbar', ['title' => 'Calendario'])
@endsection

@section('content')
  <div class="header text-center">
    <h3 class="title">FullCalendar.io</h3>
    <p class="category">Handcrafted by our friends from
      <a target="_blank" href="https://fullcalendar.io/">FullCalendar.io</a>. Please checkout their
      <a href="https://fullcalendar.io/docs/" target="_blank">full documentation.</a>
    </p>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="card card-calendar">
        <div class="card-content" class="ps-child">
          <div id="fullCalendar"></div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('material/assets/js/sweetalert2.js') }}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('material/assets/js/moment.min.js') }}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{ asset('material/assets/js/fullcalendar.min.js') }}"></script>
@endpush

@push('functions')
<script type="text/javascript">
  $(document).ready(function() {
    demo.initFullCalendar();
  });
</script>
@endpush