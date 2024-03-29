@extends('material.layouts.material')

@section('title', '- Botones')

@section('navbar')
  @include('material.partials.navbar', ['title' => 'Botones'])
@endsection

@section('content')
  <div class="container-fluid">
    <div class="card">
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Pick your Color</h4>
          </div>
          <div class="card-content">
            <button class="btn">Default</button>
            <button class="btn btn-primary">Primary</button>
            <button class="btn btn-info">Info</button>
            <button class="btn btn-success">Success</button>
            <button class="btn btn-warning">Warning</button>
            <button class="btn btn-danger">Danger</button>
            <button class="btn btn-rose">Rose</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Buttons with Label</h4>
          </div>
          <div class="card-content">
            <button class="btn">
                                        <span class="btn-label">
                                            <i class="material-icons">keyboard_arrow_left</i>
                                        </span>
              Left
            </button>
            <button class="btn">
              Right
              <span class="btn-label btn-label-right">
                                            <i class="material-icons">keyboard_arrow_right</i>
                                        </span>
            </button>
            <button class="btn btn-info">
                                        <span class="btn-label">
                                            <i class="material-icons">priority_high</i>
                                        </span>
              Info
            </button>
            <button class="btn btn-success">
                                        <span class="btn-label">
                                            <i class="material-icons">check</i>
                                        </span>
              Success
            </button>
            <button class="btn btn-warning">
              <i class="material-icons">warning</i> Warning
            </button>
            <button class="btn btn-danger">
              <i class="material-icons">close</i> Danger
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Pick your Size</h4>
          </div>
          <div class="card-content">
            <button class="btn btn-primary btn-xs">x-Small</button>
            <button class="btn btn-primary btn-sm">Small</button>
            <button class="btn btn-primary">Regular</button>
            <button class="btn btn-primary btn-lg">Large</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Pick your Style</h4>
          </div>
          <div class="card-content">
            <button class="btn btn-primary">Default</button>
            <button class="btn btn-primary btn-round">round</button>
            <button class="btn btn-primary btn-round">
              <i class="material-icons">favorite</i> with icon
            </button>
            <button class="btn btn-primary btn-round btn-fab btn-fab-mini">
              <i class="material-icons">favorite</i>
            </button>
            <button class="btn btn-primary btn-simple">
              simple
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Pagination</h4>
          </div>
          <div class="card-content">
            <ul class="pagination pagination-primary">
              <!--
color-classes: "pagination-primary", "pagination-info", "pagination-success", "pagination-warning", "pagination-danger"
-->
              <li>
                <a href="javascript:void(0);">1</a>
              </li>
              <li>
                <a href="javascript:void(0);">...</a>
              </li>
              <li>
                <a href="javascript:void(0);">5</a>
              </li>
              <li>
                <a href="javascript:void(0);">6</a>
              </li>
              <li class="active">
                <a href="javascript:void(0);">7</a>
              </li>
              <li>
                <a href="javascript:void(0);">8</a>
              </li>
              <li>
                <a href="javascript:void(0);">9</a>
              </li>
              <li>
                <a href="javascript:void(0);">...</a>
              </li>
              <li>
                <a href="javascript:void(0);">12</a>
              </li>
            </ul>
            <ul class="pagination pagination-info">
              <li>
                <a href="javascript:void(0);"> prev</a>
              </li>
              <li>
                <a href="javascript:void(0);">1</a>
              </li>
              <li>
                <a href="javascript:void(0);">2</a>
              </li>
              <li class="active">
                <a href="javascript:void(0);">3</a>
              </li>
              <li>
                <a href="javascript:void(0);">4</a>
              </li>
              <li>
                <a href="javascript:void(0);">5</a>
              </li>
              <li>
                <a href="javascript:void(0);">next </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Button Group</h4>
          </div>
          <div class="card-content">
            <div class="btn-group">
              <button type="button" class="btn btn-info">Left</button>
              <button type="button" class="btn btn-info">Middle</button>
              <button type="button" class="btn btn-info">Right</button>
            </div>
            <br>
            <br>
            <div class="btn-group">
              <button type="button" class="btn btn-round btn-info">1</button>
              <button type="button" class="btn btn-round btn-info">2</button>
              <button type="button" class="btn btn-round btn-info">3</button>
              <button type="button" class="btn btn-round btn-info">4</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-round btn-info">5</button>
              <button type="button" class="btn btn-round btn-info">6</button>
              <button type="button" class="btn btn-round btn-info">7</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="card-header">
            <h4 class="card-title">Social buttons</h4>
          </div>
          <div class="card-content">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <button class="btn btn-social btn-fill btn-twitter">
                  <i class="fa fa-twitter"></i> Connect with Twitter
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-twitter">
                  <i class="fa fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-twitter">
                  <i class="fa fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-simple btn-twitter">
                  <i class="fa fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-twitter">
                  <i class="fa fa-twitter"></i> Connect with Twitter
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <button class="btn btn-social btn-fill btn-facebook">
                  <i class="fa fa-facebook-square"></i> Share &middot; 2.2k
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-facebook">
                  <i class="fa fa-facebook"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-facebook">
                  <i class="fa fa-facebook"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-simple btn-facebook">
                  <i class="fa fa-facebook-square"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-facebook">
                  <i class="fa fa-facebook-square"></i> Share &middot; 2.2k
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <button class="btn btn-social btn-fill btn-google">
                  <i class="fa fa-google-square"></i> Share on Google+
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon  btn-google">
                  <i class="fa fa-google"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-google">
                  <i class="fa fa-google"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-simple btn-google">
                  <i class="fa fa-google"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-google">
                  <i class="fa fa-google-square"></i> Share on Google+
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <button class="btn btn-social btn-fill btn-linkedin">
                  <i class="fa fa-linkedin-square"></i> Connect with Linkedin
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon  btn-linkedin">
                  <i class="fa fa-linkedin"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-linkedin">
                  <i class="fa fa-linkedin"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-simple btn-linkedin">
                  <i class="fa fa-linkedin-square"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-linkedin">
                  <i class="fa fa-linkedin-square"></i> Connect with Linkedin
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <button class="btn btn-social btn-fill btn-pinterest">
                  <i class="fa fa-pinterest"></i> Pint it &middot; 212
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon  btn-pinterest">
                  <i class="fa fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-pinterest">
                  <i class="fa fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-simple btn-pinterest">
                  <i class="fa fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-pinterest">
                  <i class="fa fa-pinterest"></i> Pint it &middot; 212
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <button class="btn btn-social btn-fill btn-youtube">
                  <i class="fa fa-youtube-play"></i> View on Youtube
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon  btn-youtube">
                  <i class="fa fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-youtube">
                  <i class="fa fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-simple btn-youtube">
                  <i class="fa fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-youtube">
                  <i class="fa fa-youtube-play"></i> View on Youtube
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <button class="btn btn-social btn-fill btn-tumblr">
                  <i class="fa fa-tumblr-square"></i> Repost
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon  btn-tumblr">
                  <i class="fa fa-tumblr"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-tumblr">
                  <i class="fa fa-tumblr"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-simple btn-tumblr">
                  <i class="fa fa-tumblr-square"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-tumblr">
                  <i class="fa fa-tumblr-square"></i> Repost
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <button class="btn btn-social btn-fill btn-github">
                  <i class="fa fa-github"></i> Connect with Github
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon  btn-github">
                  <i class="fa fa-github"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-github">
                  <i class="fa fa-github"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-simple btn-github">
                  <i class="fa fa-github"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-github">
                  <i class="fa fa-github"></i> Connect with Github
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <button class="btn btn-social btn-fill btn-behance">
                  <i class="fa fa-behance-square"></i> Follow us
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon  btn-behance">
                  <i class="fa fa-behance"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-behance">
                  <i class="fa fa-behance"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-simple btn-behance">
                  <i class="fa fa-behance"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-behance">
                  <i class="fa fa-behance-square"></i> Follow us
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <button class="btn btn-social btn-fill btn-dribbble">
                  <i class="fa fa-dribbble"></i> Find us on Dribble
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon  btn-dribbble">
                  <i class="fa fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-dribbble">
                  <i class="fa fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-simple btn-dribbble">
                  <i class="fa fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-dribbble">
                  <i class="fa fa-dribbble"></i> Find us on Dribble
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <button class="btn btn-social btn-fill btn-reddit">
                  <i class="fa fa-reddit"></i> Repost &middot; 232
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon  btn-reddit">
                  <i class="fa fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-reddit">
                  <i class="fa fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-simple btn-reddit">
                  <i class="fa fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-reddit">
                  <i class="fa fa-reddit"></i> Repost &middot; 232
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection