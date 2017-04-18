<script type="text/javascript">
  $(document).ready(function () {

    demo.initChartist();

    $.notify({
      icon: '{{ $icon }}',
      message: "{!! $message !!}"

    }, {
      type: '{{ $type }}',
      timer: {{$timer}}
    });

  });
</script>