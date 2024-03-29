@extends('material.layouts.material')

@section('title', '- Íconos')

@section('navbar')
  @include('material.partials.navbar', ['title' => 'Íconos'])
@endsection

@section('content')
  <div class="container-fluid">
    <div class="header text-center">
      <h3 class="title">Material Design Icons</h3>
      <p class="category">Handcrafted by our friends from
        <a target="_blank" href="https://design.google.com/icons/">Google</a>
      </p>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-content">
            <div class="iframe-container hidden-sm hidden-xs">
              <iframe src="https://design.google.com/icons/">
                <p>Your browser does not support iframes.</p>
              </iframe>
            </div>
            <div class="col-md-6 hidden-lg hidden-md text-center">
              <h5>The icons are visible on Desktop mode inside an iframe. Since the iframe is not working on Mobile and Tablets please visit the icons on their original page on Google. Check the
                <a href="https://design.google.com/icons/" target="_blank">Material Icons</a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection