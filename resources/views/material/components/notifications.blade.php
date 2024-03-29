@extends('material.layouts.material')

@section('title', '- Notificaciones')

@section('navbar')
  @include('material.partials.navbar', ['title' => 'Notificaciones'])
@endsection

@section('content')
  <div class="header text-center">
    <h3 class="title">Notifications</h3>
    <p class="category">Handcrafted by our friend
      <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
      <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
    </p>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Notifications Style</h4>
        </div>
        <div class="card-content">
          <div class="alert alert-info">
            <span>This is a plain notification</span>
          </div>
          <div class="alert alert-info">
            <button type="button" aria-hidden="true" class="close">
              <i class="material-icons">close</i>
            </button>
            <span>This is a notification with close button.</span>
          </div>
          <div class="alert alert-info alert-with-icon" data-notify="container">
            <i class="material-icons" data-notify="icon">notifications</i>
            <button type="button" aria-hidden="true" class="close">
              <i class="material-icons">close</i>
            </button>
            <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
          </div>
          <div class="alert alert-rose alert-with-icon" data-notify="container">
            <i class="material-icons" data-notify="icon">notifications</i>
            <button type="button" aria-hidden="true" class="close">
              <i class="material-icons">close</i>
            </button>
            <span data-notify="message">This is a notification with close button and icon and is made with ".alert-rose". You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Notification states</h4>
        </div>
        <div class="card-content">
          <div class="alert alert-info">
            <button type="button" aria-hidden="true" class="close">
              <i class="material-icons">close</i>
            </button>
            <span>
                                            <b> Info - </b> This is a regular notification made with ".alert-info"</span>
          </div>
          <div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close">
              <i class="material-icons">close</i>
            </button>
            <span>
                                            <b> Success - </b> This is a regular notification made with ".alert-success"</span>
          </div>
          <div class="alert alert-warning">
            <button type="button" aria-hidden="true" class="close">
              <i class="material-icons">close</i>
            </button>
            <span>
                                            <b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
          </div>
          <div class="alert alert-danger">
            <button type="button" aria-hidden="true" class="close">
              <i class="material-icons">close</i>
            </button>
            <span>
                                            <b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
          </div>
          <div class="alert alert-primary">
            <button type="button" aria-hidden="true" class="close">
              <i class="material-icons">close</i>
            </button>
            <span>
                                            <b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
          </div>
          <div class="alert alert-rose">
            <button type="button" aria-hidden="true" class="close">
              <i class="material-icons">close</i>
            </button>
            <span>
                                            <b> Rose - </b> This is a regular notification made with ".alert-rose"</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-content">
          <div class="places-buttons">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h4 class="card-title">
                  Notifications Places
                  <p class="category">Click to view notifications</p>
                </h4>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="col-md-4">
                  <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','left')">Top Left</button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','center')">Top Center</button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','right')">Top Right</button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="col-md-4">
                  <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','left')">Bottom Left</button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','center')">Bottom Center</button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','right')">Bottom Right</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="card-header">
                <h4 class="card-title">Modal</h4>
              </div>
              <button class="btn btn-primary btn-raised btn-round" data-toggle="modal" data-target="#myModal">
                Classic modal
              </button>
              <button class="btn btn-raised btn-round btn-info" data-toggle="modal" data-target="#noticeModal">
                Notice modal
              </button>
              <button class="btn btn-raised btn-round btn-rose" data-toggle="modal" data-target="#smallAlertModal">
                Small alert modal
              </button>
              <!-- Classic Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="material-icons">clear</i>
                      </button>
                      <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                      </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-simple">Nice Button</button>
                      <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--  End Modal -->
              <!-- notice modal -->
              <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-notice">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                      <h5 class="modal-title" id="myModalLabel">How Do You Become an Affiliate?</h5>
                    </div>
                    <div class="modal-body">
                      <div class="instruction">
                        <div class="row">
                          <div class="col-md-8">
                            <strong>1. Register</strong>
                            <p>The first step is to create an account at
                              <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                          </div>
                          <div class="col-md-4">
                            <div class="picture">
                              <img src="{{ asset('material/assets/img/card-1.jpg') }}" alt="Thumbnail Image" class="img-rounded img-responsive">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="instruction">
                        <div class="row">
                          <div class="col-md-8">
                            <strong>2. Apply</strong>
                            <p>The first step is to create an account at
                              <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                          </div>
                          <div class="col-md-4">
                            <div class="picture">
                              <img src="{{ asset('material/assets/img/card-2.jpg') }}" alt="Thumbnail Image" class="img-rounded img-responsive">
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>If you have more questions, don't hesitate to contact us or send us a tweet @creativetim. We're here to help!</p>
                    </div>
                    <div class="modal-footer text-center">
                      <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Sounds good!</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end notice modal -->
              <!-- small modal -->
              <div class="modal fade" id="smallAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-small ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                    </div>
                    <div class="modal-body text-center">
                      <h5>Are you sure you want to do this? </h5>
                    </div>
                    <div class="modal-footer text-center">
                      <button type="button" class="btn btn-simple" data-dismiss="modal">Never mind</button>
                      <button type="button" class="btn btn-success btn-simple">Yes</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--    end small modal -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<!--  Notifications Plugin    -->
<script src="{{ asset('material/assets/js/bootstrap-notify.js') }}"></script>
@endpush