@extends('paper.layouts.pages')

@section('title', '- Registro')

@section('navbar')
  @include('paper.pages.components.register-navbar', ['title' => 'Registro'])
@endsection

@section('content')
  @include('paper.pages.components.register-form')
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