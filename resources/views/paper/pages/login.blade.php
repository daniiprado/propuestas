@extends('paper.layouts.pages')

@section('title', '- Iniciar Sesión')

@section('navbar')
  @include('paper.pages.components.login-navbar', ['title' => 'Iniciar Sesión'])
@endsection

@section('content')
  @include('paper.pages.components.login-form')
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