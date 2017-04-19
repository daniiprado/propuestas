@extends('paper.layouts.pages')

@section('title', '- Bloqueo')

@section('navbar')
  @include('paper.pages.components.lock-navbar', ['title' => 'Bloqueo'])
@endsection

@section('content')
  @include('paper.pages.components.lock-form')
@endsection


@push('functions')
<script type="text/javascript">
  $().ready(function(){
    demo.checkFullPageBackgroundImage();

    setTimeout(function(){
      // after 1000 ms we add the class animated to the login/register card
      $('.card').removeClass('card-hidden');
    }, 700)
  });
</script>
@endpush