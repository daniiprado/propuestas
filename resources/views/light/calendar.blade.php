@extends('light.layouts.light')

@section('title', '- Calendar')
@section('navbar', 'Calendar')

@section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="card card-calendar">
        <div class="content">
          <div id="fullCalendar"></div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('light/assets/js/moment.min.js') }}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{ asset('light/assets/js/fullcalendar.min.js') }}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('light/assets/js/sweetalert2.js') }}"></script>
@endpush

@push('functions')
  <script type="text/javascript">
    $().ready(function(){
      demo.initFullCalendar();
    });
  </script>
@endpush