@extends('light.layouts.pages')


@section('title', '- Lock')
@section('navbar')
  @include('light.partials.lock-nav')
@endsection

@section('page-class', 'lock-page')
@section('page-color', 'orange')
@section('page-image', asset('light/assets/img/full-screen-image-1.jpg'))


@section('content')
  <div class="content">
    <form method="#" action="#">
      <div class="user-profile">
        <div class="author">
          <img class="avatar" src="{{ $user['picture'] }}" alt="...">
        </div>
        <h4>{{ $user['name'] }}</h4>
        <div class="form-group">
          <input type="password" placeholder="Enter Password" class="form-control">
        </div>
        <button type="button" class="btn btn-neutral btn-round btn-fil btn-wd">Unlock</button>
      </div>
    </form>
  </div>
@endsection

@push('functions')
<script>
  $().ready(function(){
    lbd.checkFullPageBackgroundImage();

    setTimeout(function(){
      // after 1000 ms we add the class animated to the login/register card
      $('.card').removeClass('card-hidden');
    }, 700)
  });
</script>
@endpush