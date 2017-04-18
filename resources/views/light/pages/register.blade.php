@extends('light.layouts.pages')

@section('title', '- Register')
@section('navbar')
  @include('light.partials.register-nav')
@endsection

@section('page-class', 'register-page')
@section('page-color', 'orange')
@section('page-image', asset('light/assets/img/full-screen-image-1.jpg'))


@section('content')
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="header-text">
            <h2>Centro de Innovación y Tenología</h2>
            <h4>Register for free and experience the dashboard today</h4>
            <hr />
          </div>
        </div>
        <div class="col-md-4 col-md-offset-2">
          <div class="media">
            <div class="media-left">
              <div class="icon">
                <i class="pe-7s-user"></i>
              </div>
            </div>
            <div class="media-body">
              <h4>Free Account</h4>
              Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <div class="icon">
                <i class="pe-7s-graph1"></i>
              </div>
            </div>
            <div class="media-body">
              <h4>Awesome Performances</h4>
              Here you can write a feature description for your dashboard, let the users know what is the value that you give them.

            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <div class="icon">
                <i class="pe-7s-headphones"></i>
              </div>
            </div>
            <div class="media-body">
              <h4>Global Support</h4>
              Here you can write a feature description for your dashboard, let the users know what is the value that you give them.

            </div>
          </div>

        </div>
        <div class="col-md-4 col-md-offset-s1">
          <form method="#" action="#">
            <div class="card card-plain">
              <div class="content">
                <div class="form-group">
                  <input type="email" placeholder="Your First Name" class="form-control">
                </div>
                <div class="form-group">
                  <input type="email" placeholder="Your Last Name" class="form-control">
                </div>
                <div class="form-group">
                  <input type="email" placeholder="Company" class="form-control">
                </div>
                <div class="form-group">
                  <input type="email" placeholder="Enter email" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" placeholder="Password Confirmation" class="form-control">
                </div>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-fill btn-neutral btn-wd">Create Free Account</button>
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
    }, 1000)
  });
</script>
@endpush