@extends('paper.layouts.paper')

@section('title', '- Timeline')

@section('navbar', 'Timeline')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-timeline card-plain">
        <div class="card-header">
          <h4 class="card-title">Timeline</h4>
        </div>
        <div class="card-content">
          <ul class="timeline">
            <li class="timeline-inverted">
              <div class="timeline-badge danger">
                <i class="ti-gallery"></i>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <span class="label label-danger">Some Title</span>
                </div>
                <div class="timeline-body">
                  <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!!   It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.</p>
                </div>
                <h6>
                  <i class="ti-time"></i>
                  11 hours ago via Twitter
                </h6>
              </div>
            </li>
            <li>
              <div class="timeline-badge success">
                <i class="ti-check-box"></i>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <span class="label label-success">Another One</span>
                </div>
                <div class="timeline-body">
                  <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge info">
                <i class="ti-credit-card"></i>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <span class="label label-info">Another Title</span>
                </div>
                <div class="timeline-body">
                  <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                  <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
                  <hr>
                  <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                      <i class="ti-settings"></i> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-left" role="menu">
                      <li><a href="#action">Action</a></li>
                      <li><a href="#another">Another action</a></li>
                      <li><a href="#else">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#link">Separated link</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-badge warning">
                <i class="ti-gallery"></i>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <span class="label label-warning">Another One</span>
                </div>
                <div class="timeline-body">
                  <p>Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter also to Kim’s hair and makeup Lorraine jewelry and the whole style squad at Balmain and the Yeezy team. Thank you Anna for the invite thank you to the whole Vogue team</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection