@extends('light.layouts.pages')


@section('title', '- Login')
@section('navbar')
  @include('light.partials.pages-nav')
@endsection

@section('page-class', 'login-page')
@section('page-color', 'orange')
@section('page-image', asset('light/assets/img/full-screen-image-1.jpg'))


@section('content')
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
          <form method="#" action="#">

            <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
            <div class="card card-hidden">
              <div class="header text-center">Login</div>
              <div class="content">
                <div class="form-group">
                  <label>Email address</label>
                  <input type="email" placeholder="Enter email" class="form-control">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                  <label class="checkbox">
                    <input type="checkbox" data-toggle="checkbox" value="">
                    Subscribe to newsletter
                  </label>
                </div>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-fill btn-warning btn-wd">Login</button>
              </div>
            </div>

          </form>

        </div>
      </div>
    </div>
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