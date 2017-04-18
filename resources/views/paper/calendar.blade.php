@extends('paper.layouts.paper')

@section('title', '- Calendar')

@section('navbar')
  @include('paper.components.navbar', ['title' => 'Calendar'])
@endsection

@section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="card card-calendar">
        <div class="card-content">
          <div id="fullCalendar"></div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<!-- Sweet Alert 2 plugin -->
<script src="{{asset('paper/assets/js/sweetalert2.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('paper/assets/js/moment.min.js')}}"></script>
<!-- Circle Percentage-chart -->
<script src="{{asset('paper/assets/js/fullcalendar.min.js')}}"></script>

@endpush

@push('functions')
<script type="text/javascript">
  $(document).ready(function(){
    demo.initFullCalendar();
  });
</script>
@endpush