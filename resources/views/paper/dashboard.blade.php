@extends('paper.layouts.paper')

@section('title', '- Dashboard')

@section('navbar')
  @include('paper.components.navbar', ['title' => 'Dashboard'])
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col-xs-5">
              <div class="icon-big icon-warning text-center">
                <i class="ti-server"></i>
              </div>
            </div>
            <div class="col-xs-7">
              <div class="numbers">
                <p>Datos</p>
                MySQL
              </div>
            </div>
          </div>
          <div class="card-footer">
            <hr/>
            <div class="stats">
              <i class="ti-reload"></i> Actualizar ahora
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col-xs-5">
              <div class="icon-big icon-success text-center">
                <i class="ti-wallet"></i>
              </div>
            </div>
            <div class="col-xs-7">
              <div class="numbers">
                <p>Código</p>
                Laravel
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <hr />
          <div class="stats">
            <i class="ti-calendar"></i> Actualizar ahora
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col-xs-5">
              <div class="icon-big icon-danger text-center">
                <i class="ti-github"></i>
              </div>
            </div>
            <div class="col-xs-7">
              <div class="numbers">
                <p>Herramientas</p>
                GitHub
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <hr />
          <div class="stats">
            <i class="ti-timer"></i> Última Hora
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col-xs-5">
              <div class="icon-big icon-info text-center">
                <i class="ti-user"></i>
              </div>
            </div>
            <div class="col-xs-7">
              <div class="numbers">
                <p>Estudiantes</p>
                +3K
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <hr />
          <div class="stats">
            <i class="ti-reload"></i> Actualizar Ahora
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col-xs-7">
              <div class="numbers pull-left">
                Últmas tecnologías en Desarrollo PHP
              </div>
            </div>
            <div class="col-xs-5">
              <div class="pull-right">
                <span class="label label-success">
                  100%
                </span>
              </div>
            </div>
          </div>
          <h6 class="big-title">Usuarios <span class="text-muted">en las útlimas</span> 24 <span class="text-muted">horas</span></h6>
          <div id="chartHours" class="ct-chart"></div>
        </div>
        <div class="card-footer">
          <hr>
          <div class="footer-title">Descripción</div>
          <br>
          <br>
          <div class="chart-legend">
            <i class="fa fa-circle text-info"></i> Laravel
            <i class="fa fa-circle text-danger"></i> PHP Code
            <i class="fa fa-circle text-warning"></i> Otros Frameworks
          </div>
          <div class="pull-right">
            <button class="btn btn-info btn-fill btn-icon btn-sm">
              <i class="ti-plus"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-sm-6">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col-xs-7">
              <div class="numbers pull-left">
                $34,657
              </div>
            </div>
            <div class="col-xs-5">
              <div class="pull-right">
												<span class="label label-success">
		 											+18%
												</span>
              </div>
            </div>
          </div>
          <h6 class="big-title">total earnings <span class="text-muted">in last</span> ten <span class="text-muted">quarters</span></h6>
          <div id="chartTotalEarnings"></div>
        </div>
        <div class="card-footer">
          <hr>
          <div class="footer-title">Financial Statistics</div>
          <div class="pull-right">
            <button class="btn btn-info btn-fill btn-icon btn-sm">
              <i class="ti-plus"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col-xs-7">
              <div class="numbers pull-left">
                169
              </div>
            </div>
            <div class="col-xs-5">
              <div class="pull-right">
												<span class="label label-danger">
		 											-14%
												</span>
              </div>
            </div>
          </div>
          <h6 class="big-title">total subscriptions <span class="text-muted">in last</span> 7 days</h6>
          <div id="chartTotalSubscriptions"></div>
        </div>
        <div class="card-footer">
          <hr>
          <div class="footer-title">View all members</div>
          <div class="pull-right">
            <button class="btn btn-default btn-fill btn-icon btn-sm">
              <i class="ti-angle-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col-xs-7">
              <div class="numbers pull-left">
                8,960
              </div>
            </div>
            <div class="col-xs-5">
              <div class="pull-right">
												<span class="label label-warning">
		 											~51%
												</span>
              </div>
            </div>
          </div>
          <h6 class="big-title">total downloads <span class="text-muted">in last</span> 6 years</h6>
          <div id="chartTotalDownloads" ></div>
        </div>
        <div class="card-footer">
          <hr>
          <div class="footer-title">View more details</div>
          <div class="pull-right">
            <button class="btn btn-success btn-fill btn-icon btn-sm">
              <i class="ti-info"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3 col-sm-6">
      <div class="card card-circle-chart" data-background-color="blue">
        <div class="card-header text-center">
          <h5 class="card-title">Dashboard</h5>
          <p class="description">Monthly sales target</p>
        </div>
        <div class="card-content">
          <div id="chartDashboard" class="chart-circle" data-percent="70">70%</div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card card-circle-chart" data-background-color="green">
        <div class="card-header text-center">
          <h5 class="card-title">Orders</h5>
          <p class="description">Completed</p>
        </div>
        <div class="card-content">
          <div id="chartOrders" class="chart-circle" data-percent="34">34%</div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card card-circle-chart" data-background-color="orange">
        <div class="card-header text-center">
          <h5 class="card-title">New Visitors</h5>
          <p class="description">Out of total number</p>
        </div>
        <div class="card-content">
          <div id="chartNewVisitors" class="chart-circle" data-percent="62">62%</div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card card-circle-chart" data-background-color="brown">
        <div class="card-header text-center">
          <h5 class="card-title">Subscriptions</h5>
          <p class="description">Monthly newsletter</p>
        </div>
        <div class="card-content">
          <div id="chartSubscriptions" class="chart-circle" data-percent="10">10%</div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-sm-6">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col-xs-7">
              <div class="numbers pull-left">
                PHP Hoy
              </div>
            </div>
            <div class="col-xs-5">
              <div class="pull-right">
                <span class="label label-success">
                  100%
                </span>
              </div>
            </div>
          </div>
          <h6 class="big-title">Usuarios <span class="text-muted">en las útlimas</span> 24 <span class="text-muted">horas</span></h6>
          <div id="chartHours" class="ct-chart"></div>
        </div>
        <div class="card-footer">
          <hr>
          <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
          <div class="chart-legend">
            <i class="fa fa-circle text-info"></i> Laravel
            <i class="fa fa-circle text-danger"></i> PHP Code
            <i class="fa fa-circle text-warning"></i> Otros Frameworks
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-6">
      <div class="card ">

        <div class="card-content">
          <div class="row">
            <div class="col-xs-7">
              <div class="numbers pull-left">
                Ventas 2017
              </div>
            </div>
            <div class="col-xs-5">
              <div class="pull-right">
                <span class="label label-success">
                  100%
                </span>
              </div>
            </div>
          </div>
          <div id="chartActivity" class="ct-chart"></div>
        </div>
        <div class="card-footer">
          <hr>
          <div class="footer-title">View more details</div>
          <div class="chart-legend">
            <i class="fa fa-circle text-info"></i> Tesla Model S
            <i class="fa fa-circle text-warning"></i> BMW 5 Series
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <!-- Circle Percentage-chart -->
  <script src="{{asset('paper/assets/js/jquery.easypiechart.min.js')}}"></script>
  <!--  Charts Plugin -->
  <script src="{{asset('paper/assets/js/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('paper/assets/js/bootstrap-notify.js')}}"></script>
@endpush

@push('functions')
  <script type="text/javascript">
    $(document).ready(function(){
      demo.initOverviewDashboard();
      demo.initCirclePercentage();
    });
  </script>
  <!--  Notifications Start -->
  @include('paper.components.notification', [
    'icon'    => 'ti-announcement',
    'message' => "Bienvenido al  <b>Centro de Innovación y Tecnología</b> Programa de Ingeniería de Sistemas UdeC.",
    'type'    => 'success',
    'timer'   => 3000,
  ])
@endpush