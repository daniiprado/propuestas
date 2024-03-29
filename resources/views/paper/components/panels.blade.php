@extends('paper.layouts.paper')
@section('title', '- Grid')
@section('navbar', 'Grid')

@section('content')
  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Collapsible Accordion</h4>
          <p class="category">Bootstrap default style</p>
        </div>
        <div class="card-content">
          <div id="acordeon">
            <div class="panel-group" id="accordion">
              <div class="panel panel-border panel-default">
                <a data-toggle="collapse" href="#collapseOne">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      Default Collapsible Item 1
                      <i class="ti-angle-down"></i>
                    </h4>
                  </div>
                </a>
                <div id="collapseOne" class="panel-collapse collapse">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="panel panel-border panel-default">
                <a data-toggle="collapse" href="#collapseTwo">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      Default Collapsible Item 1
                      <i class="ti-angle-down"></i>
                    </h4>
                  </div>
                </a>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="panel panel-border panel-default">
                <a data-toggle="collapse" href="#collapseThree">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      Default Collapsible Item 1
                      <i class="ti-angle-down"></i>
                    </h4>
                  </div>
                </a>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>
          </div><!--  end acordeon -->
        </div>
      </div>
    </div>


    <div class="col-lg-6 col-md-12">
      <div class="card card-plain">
        <div class="card-header">
          <h4 class="card-title">Collapsible Accordion on Plain Card</h4>
          <p class="category">Bootstrap default style</p>
        </div>
        <div class="card-content">

          <div class="panel-group" id="accordion">
            <div class="panel panel-border panel-default">
              <a data-toggle="collapse" href="#collapseOnePlain">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    Default Collapsible Item 1
                    <i class="ti-angle-down"></i>
                  </h4>
                </div>
              </a>
              <div id="collapseOnePlain" class="panel-collapse collapse">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="panel panel-border panel-default">
              <a data-toggle="collapse" href="#collapseTwoPlain">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    Default Collapsible Item 1
                    <i class="ti-angle-down"></i>
                  </h4>
                </div>
              </a>
              <div id="collapseTwoPlain" class="panel-collapse collapse">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="panel panel-border panel-default">
              <a data-toggle="collapse" href="#collapseThreePlain">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    Default Collapsible Item 1
                    <i class="ti-angle-down"></i>
                  </h4>
                </div>
              </a>
              <div id="collapseThreePlain" class="panel-collapse collapse">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tabs</h4>
          <p class="category">Vertical tabs</p>
        </div>
        <div class="card-content">
          <div class="row">
            <div class="left-vertical-tabs">
              <ul class="nav nav-stacked" role="tablist">
                <li class="active">
                  <a href="#info" role="tab" data-toggle="tab">
                    Info
                  </a>
                </li>
                <li>
                  <a href="#description" role="tab" data-toggle="tab">
                    Description
                  </a>
                </li>
                <li>
                  <a href="#concept" role="tab" data-toggle="tab">
                    Concept
                  </a>
                </li>
                <li>
                  <a href="#support" role="tab" data-toggle="tab">
                    Support
                  </a>
                </li>
                <li>
                  <a href="#extra" role="tab" data-toggle="tab">
                    Extra
                  </a>
                </li>
              </ul>
            </div>
            <div class="right-text-tabs">
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="info">
                  <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.</p>
                  <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                </div>
                <div class="tab-pane" id="description">
                  <p>The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design. </p>
                  <p>There are no distinct edges. No gaps. Just a smooth, seamless bond of metal and glass that feels like one continuous surface.</p>
                </div>
                <div class="tab-pane" id="concept">
                  <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                  <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. </p>
                </div>
                <div class="tab-pane" id="support">
                  <p>From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.</p>
                  <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                </div>
                <div class="tab-pane" id="extra">
                  <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. </p>
                  <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tabs</h4>
          <p class="category">Plain text tabs</p>
        </div>
        <div class="card-content">
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
              <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#profile" data-toggle="tab">Profile</a></li>
                <li><a href="#messages" data-toggle="tab">Messages</a></li>
              </ul>
            </div>
          </div>
          <div id="my-tab-content" class="tab-content text-center">
            <div class="tab-pane active" id="home">
              <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.</p>
            </div>
            <div class="tab-pane" id="profile">
              <p>Here is your profile.</p>
            </div>
            <div class="tab-pane" id="messages">
              <p>Here are your messages.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection