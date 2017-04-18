@extends('paper.layouts.paper')

@section('title', '- Botones')

@section('navbar')
  @include('paper.components.navbar', ['title' => 'Botones'])
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="row">
          <div class="col-md-6">
            <div class="card-header">
              <h4 class="card-title">Colors</h4>
            </div>
            <div class="card-content">
              <button class="btn btn-default btn-fill btn-wd">Default</button>
              <button class="btn btn-primary btn-fill btn-wd">Primary</button>
              <button class="btn btn-info btn-fill btn-wd">Info</button>
              <br>
              <br>
              <button class="btn btn-success btn-fill btn-wd">Success</button>
              <button class="btn btn-warning btn-fill btn-wd">Warning</button>
              <button class="btn btn-danger btn-fill btn-wd">Danger</button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-header">
              <h4 class="card-title">Styles</h4>
            </div>
            <div class="card-content">
              <button class="btn btn-wd">Default</button>
              <button class="btn btn-fill btn-wd">Fill</button>
              <button class="btn btn-simple btn-wd">Simple</button>
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="card-header">
              <h4 class="card-title">Buttons with Label and Animation</h4>
            </div>
            <div class="card-content">
              <button type="button" class="btn btn-wd btn-success">
                <span class="btn-label">
                    <i class="fa fa-check"></i>
                </span>
                Success
              </button>

              <button type="button" class="btn btn-wd btn-danger">
                <span class="btn-label">
                    <i class="fa fa-times"></i>
                </span>
                Danger
              </button>

              <button type="button" class="btn btn-wd btn-info btn-fill btn-rotate">
                <span class="btn-label">
                    <i class="ti-settings"></i>
                </span>
                Settings
              </button>
              <br>
              <br>
              <button type="button" class="btn btn-wd btn-warning btn-fill btn-magnify">
                <span class="btn-label">
                    <i class="ti-search"></i>
                </span>
                Search
              </button>

              <button type="button" class="btn btn-wd btn-default btn-fill btn-move-left">
                <span class="btn-label">
                    <i class="ti-angle-left"></i>
                </span>
                Back
              </button>

              <button type="button" class="btn btn-wd btn-default btn-fill btn-move-right">
                Next
                <span class="btn-label">
                    <i class="ti-angle-right"></i>
                </span>
              </button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-header">
              <h4 class="card-title">Sizes</h4>
            </div>
            <div class="card-content">
              <button class="btn btn-lg btn-fill">Large</button>
              <button class="btn btn-fill">Default</button>
              <button class="btn btn-sm btn-fill">Small</button>
              <button class="btn btn-xs btn-fill">X-Small</button>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="card-header">
              <h4 class="card-title">Button Group</h4>
            </div>
            <div class="card-content">
              <div class="btn-group">
                <button type="button" class="btn btn-default">Left</button>
                <button type="button" class="btn btn-default">Middle</button>
                <button type="button" class="btn btn-default">Right</button>
              </div>
              <br><br>
              <div class="btn-group">
                <button type="button" class="btn btn-default">1</button>
                <button type="button" class="btn btn-default">2</button>
                <button type="button" class="btn btn-default">3</button>
                <button type="button" class="btn btn-default">4</button>
              </div>
              <div class="btn-group">
                <button type="button" class="btn btn-default">5</button>
                <button type="button" class="btn btn-default">6</button>
                <button type="button" class="btn btn-default">7</button>
              </div>
              <div class="btn-group">
                <button type="button" class="btn btn-default">8</button>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-header">
              <h4 class="card-title">Pagination</h4>
            </div>
            <div class="card-content">
              <ul class="pagination">
                <li><a href="#pdp"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                <li class="active"><a href="#pdp">1</a></li>
                <li><a href="#pdp">2</a></li>
                <li><a href="#pdp">3</a></li>
                <li><a href="#pdp">4</a></li>
                <li><a href="#pdp">5</a></li>
                <li><a href="#pdp"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
              </ul>
              <ul class="pagination pagination-info">
                <li><a href="#pdp"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                <li class="active"><a href="#pdp">1</a></li>
                <li><a href="#pdp">2</a></li>
                <li><a href="#pdp">3</a></li>
                <li><a href="#pdp">4</a></li>
                <li><a href="#pdp">5</a></li>
                <li><a href="#pdp"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card-header">
          <h4 class="card-title">Social buttons</h4>
        </div>
        <div class="card-content">
          <div class="row">
            <div class="col-md-12">
              <h5>Default</h5>
              <button class="btn btn-icon btn-twitter">
                <i class="ti-twitter-alt"></i>
              </button>
              <button class="btn btn-icon btn-facebook">
                <i class="ti-facebook"> </i>
              </button>
              <button class="btn btn-icon btn-google">
                <i class="ti-google"> </i>
              </button>
              <button class="btn btn-icon btn-linkedin">
                <i class="ti-linkedin"></i>
              </button>
              <button class="btn btn-icon btn-pinterest">
                <i class="ti-pinterest"></i>
              </button>
              <button class="btn btn-icon btn-youtube">
                <i class="ti-youtube"> </i>
              </button>
              <button class="btn btn-icon btn-tumblr">
                <i class="ti-tumblr"> </i>
              </button>
              <button class="btn btn-icon btn-github">
                <i class="ti-github"></i>
              </button>
              <button class="btn btn-icon btn-dribbble">
                <i class="ti-dribbble"></i>
              </button>
              <button class="btn btn-icon btn-reddit">
                <i class="ti-reddit"></i>
              </button>
              <button class="btn btn-icon btn-instagram">
                <i class="ti-instagram"></i>
              </button>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <h5>Filled</h5>
              <button class="btn btn-icon btn-fill btn-twitter">
                <i class="ti-twitter-alt"></i>
              </button>
              <button class="btn btn-icon btn-fill btn-facebook">
                <i class="ti-facebook"> </i>
              </button>
              <button class="btn btn-icon btn-fill btn-google">
                <i class="ti-google"> </i>
              </button>
              <button class="btn btn-icon btn-fill btn-linkedin">
                <i class="ti-linkedin"></i>
              </button>
              <button class="btn btn-icon btn-fill btn-pinterest">
                <i class="ti-pinterest"></i>
              </button>
              <button class="btn btn-icon btn-fill btn-youtube">
                <i class="ti-youtube"> </i>
              </button>
              <button class="btn btn-icon btn-fill btn-tumblr">
                <i class="ti-tumblr"> </i>
              </button>
              <button class="btn btn-icon btn-fill btn-github">
                <i class="ti-github"></i>
              </button>
              <button class="btn btn-icon btn-fill btn-dribbble">
                <i class="ti-dribbble"></i>
              </button>
              <button class="btn btn-icon btn-fill btn-reddit">
                <i class="ti-reddit"></i>
              </button>
              <button class="btn btn-icon btn-fill btn-instagram">
                <i class="ti-instagram"></i>
              </button>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <h5>Simple</h5>
              <button class="btn btn-icon btn-simple btn-twitter">
                <i class="ti-twitter-alt"></i>
              </button>
              <button class="btn btn-icon btn-simple btn-facebook">
                <i class="ti-facebook"> </i>
              </button>
              <button class="btn btn-icon btn-simple btn-google">
                <i class="ti-google"> </i>
              </button>
              <button class="btn btn-icon btn-simple btn-linkedin">
                <i class="ti-linkedin"></i>
              </button>
              <button class="btn btn-icon btn-simple btn-pinterest">
                <i class="ti-pinterest"></i>
              </button>
              <button class="btn btn-icon btn-simple btn-youtube">
                <i class="ti-youtube"> </i>
              </button>
              <button class="btn btn-icon btn-simple btn-tumblr">
                <i class="ti-tumblr"> </i>
              </button>
              <button class="btn btn-icon btn-simple btn-github">
                <i class="ti-github"></i>
              </button>
              <button class="btn btn-icon btn-simple btn-dribbble">
                <i class="ti-dribbble"></i>
              </button>
              <button class="btn btn-icon btn-simple btn-reddit">
                <i class="ti-reddit"></i>
              </button>
              <button class="btn btn-icon btn-simple btn-instagram">
                <i class="ti-instagram"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection