<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-minimize">
      <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
    </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <a class="navbar-brand" href="javascript:;">{{$title}}</a>
    </div>
    <div class="collapse navbar-collapse">

      <form class="navbar-form navbar-left navbar-search-form" role="search">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-search"></i></span>
          <input type="text" value="" class="form-control" placeholder="Buscar...">
        </div>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{url('/')}}" class="dropdown-toggle" data-toggle="dropdown">
            <i class="ti-panel"></i>
            <p>Estadísticas</p>
          </a>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
            <i class="ti-bell"></i>
            <p class="notification">5</p>
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="javascript:;">Notificación 1</a></li>
            <li><a href="javascript:;">Notificación 2</a></li>
            <li><a href="javascript:;">Notificación 3</a></li>
            <li><a href="javascript:;">Notificación 4</a></li>
            <li><a href="javascript:;">Notificación 5</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
            <i class="ti-user"></i>
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="javascript:;"><i class="ti-settings"> Configuración</i></a></li>
            <li><a href="javascript:;"><i class="ti-email"> Mensajes</i></a></li>
            <li><a href="javascript:;"><i class="ti-plug"> Salir</i></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>