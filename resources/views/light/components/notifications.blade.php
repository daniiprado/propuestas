@extends('light.layouts.light')

@section('title', '- Notificaciones')
@section('navbar', 'Notificaciones')

@section('content')
  <div class="card">
    <div class="header">
      <h4 class="title">Notifications</h4>
      <p class="category">Handcrafted by our friend <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a></p>

    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-6">
          <h5>Notifications Style</h5>
          <div class="alert alert-info">
            <span>This is a plain notification</span>
          </div>
          <div class="alert alert-info">
            <button type="button" aria-hidden="true" class="close">×</button>
            <span>This is a notification with close button.</span>
          </div>
          <div class="alert alert-info alert-with-icon" data-notify="container">
            <button type="button" aria-hidden="true" class="close">×</button>
            <span data-notify="icon" class="pe-7s-bell"></span>
            <span data-notify="message">This is a notification with close button and icon.</span>
          </div>
          <div class="alert alert-info alert-with-icon" data-notify="container">
            <button type="button" aria-hidden="true" class="close">×</button>
            <span data-notify="icon" class="pe-7s-bell"></span>
            <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
          </div>
        </div>
        <div class="col-md-6">
          <h5>Notification States</h5>
          <div class="alert alert-info">
            <button type="button" aria-hidden="true" class="close">×</button>
            <span><b> Info - </b> This is a regular notification made with ".alert-info"</span>
          </div>
          <div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close">×</button>
            <span><b> Success - </b> This is a regular notification made with ".alert-success"</span>
          </div>
          <div class="alert alert-warning">
            <button type="button" aria-hidden="true" class="close">×</button>
            <span><b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
          </div>
          <div class="alert alert-danger">
            <button type="button" aria-hidden="true" class="close">×</button>
            <span><b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="places-buttons">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h5>Notifications Places
              <p class="category">Click to view notifications</p>
            </h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-md-offset-3">
            <button class="btn btn-default btn-block" onclick="demo.showNotification('top','left')">Top Left</button>
          </div>
          <div class="col-md-2">
            <button class="btn btn-default btn-block" onclick="demo.showNotification('top','center')">Top Center</button>
          </div>
          <div class="col-md-2">
            <button class="btn btn-default btn-block" onclick="demo.showNotification('top','right')">Top Right</button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-md-offset-3">
            <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','left')">Bottom Left</button>
          </div>
          <div class="col-md-2">
            <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','center')">Bottom Center</button>
          </div>
          <div class="col-md-2">
            <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','right')">Bottom Right</button>
          </div>
        </div>
      </div>

      <h4 class="title">Modals</h4>
      <p class="category">We've restyled the default modals from Bootstrap. Please checkout the <a href="http://getbootstrap.com/javascript/#modals" target="_blank">full documentation</a>.
      </p><br />
      <div class="row">
        <div class="col-md-6">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-info btn-fill" data-toggle="modal" data-target="#myModal">
            Launch demo modal
          </button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success btn-fill">Save changes</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<!--  Notifications Plugin    -->
<script src="{{ asset('light/assets/js/bootstrap-notify.js') }}"></script>
@endpush