<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-minimize">
      <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
        <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
        <i class="fa fa-navicon visible-on-sidebar-mini"></i>
      </button>
    </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:;"> @yield('navbar') </a>
    </div>
    <div class="collapse navbar-collapse">

      <form class="navbar-form navbar-left navbar-search-form" role="search">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-search"></i></span>
          <input type="text" value="" class="form-control" placeholder="Search...">
        </div>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{ url('/light/chart') }}">
            <i class="fa fa-line-chart"></i>
            <p>Stats</p>
          </a>
        </li>

        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-gavel"></i>
            <p class="hidden-md hidden-lg">
              Actions
              <b class="caret"></b>
            </p>
          </a>
          <ul class="dropdown-menu">
            <li><a href="javascript:;">Create New Post</a></li>
            <li><a href="javascript:;">Manage Something</a></li>
            <li><a href="javascript:;">Do Nothing</a></li>
            <li><a href="javascript:;">Submit to live</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">Another Action</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="notification">5</span>
            <p class="hidden-md hidden-lg">
              Notifications
              <b class="caret"></b>
            </p>
          </a>
          <ul class="dropdown-menu">
            <li><a href="javascript:;">Notification 1</a></li>
            <li><a href="javascript:;">Notification 2</a></li>
            <li><a href="javascript:;">Notification 3</a></li>
            <li><a href="javascript:;">Notification 4</a></li>
            <li><a href="javascript:;">Another notification</a></li>
          </ul>
        </li>

        <li class="dropdown dropdown-with-icons">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-list"></i>
            <p class="hidden-md hidden-lg">
              More
              <b class="caret"></b>
            </p>
          </a>
          <ul class="dropdown-menu dropdown-with-icons">
            <li>
              <a href="javascript:;">
                <i class="pe-7s-mail"></i> Messages
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <i class="pe-7s-help1"></i> Help Center
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <i class="pe-7s-tools"></i> Settings
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="javascript:;">
                <i class="pe-7s-lock"></i> Lock Screen
              </a>
            </li>
            <li>
              <a href="javascript:;" class="text-danger">
                <i class="pe-7s-close-circle"></i>
                Log out
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>