<?php

namespace Propuesta\Http\Controllers;

class MenuController extends Controller
{
  /**
   * Return User Data Menu to Material
   *
   * @return array
   */
  public function maerialUserData()
  {
    $user = [
      'name' => 'Laura Romero',
      'picture' => asset('paper/assets/img/faces/face-0.jpg'),
      'bg' => asset('material/assets/img/sidebar-1.jpg'),
      /* white | black */
      'color' => 'green',
      /* purple | blue | green | orange | red | rose */
      'active-color' => 'rose',
      'submenu' => [
        ['url' => 'javascript:;', 'title' => 'Mi Perfil'],
        ['url' => 'javascript:;', 'title' => 'Editar Perfil'],
        ['url' => 'javascript:;', 'title' => 'Configuración'],
      ]
    ];
    return $user;
  }

  /**
   * Return Data Menu to Material
   *
   * @return array
   */
  public function materialMenu()
  {

    $items = [
        'dashboard'       => ['url' => 'material/dashboard', 'secure' => 'true', 'icon' => 'dashboard'],
        'paginas'     => ['submenu' => [
            'timeline'            => ['url' => 'material/paginas/timeline', 'secure' => 'true', 'icon' => ''],
            'perfil'              => ['url' => 'material/paginas/perfil', 'secure' => 'true', 'icon' => ''],
            'inicio_de_sesion'    => ['url' => 'material/paginas/login', 'secure' => 'true', 'icon' => ''],
            'registro'            => ['url' => 'material/paginas/registro', 'secure' => 'true', 'icon' => ''],
            'lock'                => ['url' => 'material/paginas/lock', 'secure' => 'true', 'icon' => ''],
            'pricing'             => ['url' => 'material/paginas/pricing', 'secure' => 'true', 'icon' => ''],
        ],
            'icon'  => 'image',
            'url'   => '#pagesExamples',
            'div'   => 'pagesExamples'
        ],
        'componentes'     => ['submenu' => [
            'tipografia'  => ['url' => 'material/componentes/tipografia', 'secure' => 'true', 'icon' => ''],
            'sweetalert'  => ['url' => 'material/componentes/sweetalert', 'secure' => 'true', 'icon' => ''],
            'iconos'      => ['url' => 'material/componentes/iconos', 'secure' => 'true', 'icon' => ''],
            'botones'     => ['url' => 'material/componentes/botones', 'secure' => 'true', 'icon' => ''],
            'notificaciones'  => ['url' => 'material/componentes/notificaciones', 'secure' => 'true', 'icon' => ''],
            'grid'  => ['url' => 'material/componentes/grid', 'secure' => 'true', 'icon' => ''],
            'panel'  => ['url' => 'material/componentes/panel', 'secure' => 'true', 'icon' => ''],
        ],
            'icon'  => 'view_module',
            'url'   => '#componentsExamples',
            'div'   => 'componentsExamples'
        ],
        'formularios'     => ['submenu' => [
            'regular_forms'     => ['url' => 'material/formularios/regular', 'secure' => 'true', 'icon' => ''],
            'extended_forms'    => ['url' => 'material/formularios/extended', 'secure' => 'true', 'icon' => ''],
            'validation_forms'  => ['url' => 'material/formularios/validation', 'secure' => 'true', 'icon' => ''],
            'wizard'            => ['url' => 'material/formularios/wizard', 'secure' => 'true', 'icon' => ''],
        ],
            'icon'  => 'content_paste',
            'url'   => '#formsExamples',
            'div'   => 'formsExamples'
        ],
        'tablas'     => ['submenu' => [
            'datatables'          => ['url' => 'material/tablas/datatables', 'secure' => 'true', 'icon' => ''],
            'regular'          => ['url' => 'material/tablas/regular', 'secure' => 'true', 'icon' => ''],
            'extended'          => ['url' => 'material/tablas/extended', 'secure' => 'true', 'icon' => ''],
        ],
            'icon'  => 'grid_on',
            'url'   => '#tablesExamples',
            'div'   => 'tablesExamples'
        ],
        'mapas'     => ['submenu' => [
            'google'           => ['url' => 'material/mapas/google', 'secure' => 'true', 'icon' => ''],
            'fullscreen'           => ['url' => 'material/mapas/fullscreen', 'secure' => 'true', 'icon' => ''],
            'vector'           => ['url' => 'material/mapas/vector', 'secure' => 'true', 'icon' => ''],
        ],
            'icon'  => 'place',
            'url'   => '#mapsExamples',
            'div'   => 'mapsExamples'
        ],
        'widgets'  => ['url' => 'material/widgets', 'secure' => 'true', 'icon' => 'widgets'],
        'charts'  => ['url' => 'material/charts', 'secure' => 'true', 'icon' => 'timeline'],
        'calendario'  => ['url' => 'material/calendario', 'secure' => 'true', 'icon' => 'date_range'],
    ];
    return $items;
  }

  /**
   * Return User Data Menu to Light
   *
   * @return array
   */
  public function lightUserData()
  {
    $user = [
        'name' => 'Laura Romero',
        'picture' => asset('light/assets/img/default-avatar.png'),
        'bg' => asset('light/assets/img/full-screen-image-3.jpg'),
        /* blue | azure | green | orange | red | purple */
        'active-color' => 'orange',
        'submenu' => [
            ['url' => 'javascript:;', 'title' => 'Mi Perfil'],
            ['url' => 'javascript:;', 'title' => 'Editar Perfil'],
            ['url' => 'javascript:;', 'title' => 'Configuración'],
        ]
    ];
    return $user;
  }

  /**
   * Return Data Menu to Light
   *
   * @return array
   */
  public function lightMenu()
  {

    $items = [
        'dashboard'       => ['url' => 'light/dashboard', 'secure' => 'true', 'icon' => 'pe-7s-graph'],
        'paginas'     => ['submenu' => [
            'perfil'              => ['url' => 'light/paginas/perfil', 'secure' => 'true', 'icon' => ''],
            'inicio_de_sesion'    => ['url' => 'light/paginas/login', 'secure' => 'true', 'icon' => ''],
            'registro'            => ['url' => 'light/paginas/registro', 'secure' => 'true', 'icon' => ''],
            'lock'                => ['url' => 'light/paginas/lock', 'secure' => 'true', 'icon' => ''],
        ],
            'icon'  => 'pe-7s-gift',
            'url'   => '#pagesExamples',
            'div'   => 'pagesExamples'
        ],
        'componentes'     => ['submenu' => [
            'tipografia'  => ['url' => 'light/componentes/tipografia', 'secure' => 'true', 'icon' => ''],
            'sweetalert'  => ['url' => 'light/componentes/sweetalert', 'secure' => 'true', 'icon' => ''],
            'iconos'      => ['url' => 'light/componentes/iconos', 'secure' => 'true', 'icon' => ''],
            'botones'     => ['url' => 'light/componentes/botones', 'secure' => 'true', 'icon' => ''],
            'notificaciones'  => ['url' => 'light/componentes/notificaciones', 'secure' => 'true', 'icon' => ''],
            'grid'  => ['url' => 'light/componentes/grid', 'secure' => 'true', 'icon' => ''],
            'panel'  => ['url' => 'light/componentes/panel', 'secure' => 'true', 'icon' => ''],
        ],
            'icon'  => 'pe-7s-plugin',
            'url'   => '#componentsExamples',
            'div'   => 'componentsExamples'
        ],
        'formularios'     => ['submenu' => [
            'regular_forms'     => ['url' => 'light/formularios/regular', 'secure' => 'true', 'icon' => ''],
            'extended_forms'    => ['url' => 'light/formularios/extended', 'secure' => 'true', 'icon' => ''],
            'validation_forms'  => ['url' => 'light/formularios/validation', 'secure' => 'true', 'icon' => ''],
            'wizard'            => ['url' => 'light/formularios/wizard', 'secure' => 'true', 'icon' => ''],
        ],
            'icon'  => 'pe-7s-note2',
            'url'   => '#formsExamples',
            'div'   => 'formsExamples'
        ],
        'tablas'     => ['submenu' => [
            'datatables'          => ['url' => 'light/tablas/datatables', 'secure' => 'true', 'icon' => ''],
            'regular'          => ['url' => 'light/tablas/regular', 'secure' => 'true', 'icon' => ''],
            'extended'          => ['url' => 'light/tablas/extended', 'secure' => 'true', 'icon' => ''],
            'bootstrap'          => ['url' => 'light/tablas/bootstrap', 'secure' => 'true', 'icon' => ''],
        ],
            'icon'  => 'pe-7s-news-paper',
            'url'   => '#tablesExamples',
            'div'   => 'tablesExamples'
        ],
        'mapas'     => ['submenu' => [
            'google'           => ['url' => 'light/mapas/google', 'secure' => 'true', 'icon' => ''],
            'fullscreen'           => ['url' => 'light/mapas/fullscreen', 'secure' => 'true', 'icon' => ''],
            'vector'           => ['url' => 'light/mapas/vector', 'secure' => 'true', 'icon' => ''],
        ],
            'icon'  => 'pe-7s-map-marker',
            'url'   => '#mapsExamples',
            'div'   => 'mapsExamples'
        ],
        'charts'  => ['url' => 'light/charts', 'secure' => 'true', 'icon' => 'pe-7s-graph1'],
        'calendario'  => ['url' => 'light/calendario', 'secure' => 'true', 'icon' => 'pe-7s-date'],
    ];
    return $items;
  }

  /**
     * Return User Data Menu to Paper
   *
   * @return array
   */
  public function paperUserData()
  {
    $user = [
        'name' => 'Daniel Prado',
        'picture' => asset('paper/assets/img/faces/face-0.jpg'),
        'color' => 'green',
        'active-color' => 'warning',
        'submenu' => [
            ['url' => 'javascript:;', 'title' => 'Mi Perfil', 'min' => 'MP'],
            ['url' => 'javascript:;', 'title' => 'Editar Perfil', 'min' => 'EP'],
            ['url' => 'javascript:;', 'title' => 'Configuración', 'min' => 'C'],
        ]
    ];
    return $user;
  }

  /**
   * Return Data Menu to Paper
   *
   * @return array
   */
  public function paperMenu()
  {

    $items = [
        'dashboard'     => ['submenu' => [
              'overview' => ['url' => 'paper/dashboard/overview', 'secure' => 'true', 'icon' => '', 'min' => 'OV'],
              'stats'    => ['url' => 'paper/dashboard/stats', 'secure' => 'true', 'icon' => '', 'min' => 'S'],
          ],
            'icon'  => 'ti-panel',
            'url'   => '#dashboardExamples',
            'div'   => 'dashboardExamples'
        ],
        'componentes'     => ['submenu' => [
            'botones'     => ['url' => 'paper/componentes/botones', 'secure' => 'true', 'icon' => '', 'min' => 'B'],
            'grid'  => ['url' => 'paper/componentes/grid', 'secure' => 'true', 'icon' => '', 'min' => 'G'],
            'panel'  => ['url' => 'paper/componentes/panel', 'secure' => 'true', 'icon' => '', 'min' => 'P'],
            'sweetalert'  => ['url' => 'paper/componentes/sweetalert', 'secure' => 'true', 'icon' => '', 'min' => 'SA'],
            'notificaciones'  => ['url' => 'paper/componentes/notificaciones', 'secure' => 'true', 'icon' => '', 'min' => 'N'],
            'iconos'      => ['url' => 'paper/componentes/iconos', 'secure' => 'true', 'icon' => '', 'min' => 'I'],
            'tipografia'  => ['url' => 'paper/componentes/tipografia', 'secure' => 'true', 'icon' => '', 'min' => 'T'],
        ],
            'icon'  => 'ti-package',
            'url'   => '#componentsExamples',
            'div'   => 'componentsExamples'
        ],
        'formularios'     => ['submenu' => [
            'regular_forms'     => ['url' => 'paper/formularios/regular', 'secure' => 'true', 'icon' => '', 'min' => 'RF'],
            'extended_forms'  => ['url' => 'paper/formularios/extended', 'secure' => 'true', 'icon' => '', 'min' => 'EF'],
            'validation_forms'  => ['url' => 'paper/formularios/validation', 'secure' => 'true', 'icon' => '', 'min' => 'VF'],
            'wizard_forms'  => ['url' => 'paper/formularios/wizard', 'secure' => 'true', 'icon' => '', 'min' => 'WF'],
        ],
            'icon'  => 'ti-clipboard',
            'url'   => '#formsExamples',
            'div'   => 'formsExamples'
        ],

        'tablas'     => ['submenu' => [
            'regular_tables'     => ['url' => 'paper/tablas/regular', 'secure' => 'true', 'icon' => '', 'min' => 'RT'],
            'extended_tables'  => ['url' => 'paper/tablas/extended', 'secure' => 'true', 'icon' => '', 'min' => 'ET'],
            'bootstrap_tables'  => ['url' => 'paper/tablas/bootstrap', 'secure' => 'true', 'icon' => '', 'min' => 'BT'],
            'data_tables'  => ['url' => 'paper/tablas/datatables', 'secure' => 'true', 'icon' => '', 'min' => 'DT'],
        ],
            'icon'  => 'ti-view-list-alt',
            'url'   => '#tablesExamples',
            'div'   => 'tablesExamples'
        ],

        'mapas'     => ['submenu' => [
            'google_maps'     => ['url' => 'paper/mapas/google', 'secure' => 'true', 'icon' => '', 'min' => 'GM'],
            'vector_maps'  => ['url' => 'paper/mapas/vector', 'secure' => 'true', 'icon' => '', 'min' => 'VM'],
            'fullscreen_maps'  => ['url' => 'paper/mapas/fullscreen', 'secure' => 'true', 'icon' => '', 'min' => 'FSM'],
        ],
            'icon'  => 'ti-map',
            'url'   => '#mapsExamples',
            'div'   => 'mapsExamples'
        ],
        'charts'  => ['url' => 'paper/charts', 'secure' => 'true', 'icon' => 'ti-bar-chart-alt'],
        'calendario'  => ['url' => 'paper/calendario', 'secure' => 'true', 'icon' => 'ti-calendar'],
        'paginas'     => ['submenu' => [
           'timeline'     => ['url' => 'paper/paginas/timeline', 'secure' => 'true', 'icon' => '', 'min' => 'TL'],
           'perfil'     => ['url' => 'paper/paginas/perfil', 'secure' => 'true', 'icon' => '', 'min' => 'P'],
           'login'     => ['url' => 'paper/paginas/login', 'secure' => 'true', 'icon' => '', 'min' => 'L'],
           'registro'     => ['url' => 'paper/paginas/registro', 'secure' => 'true', 'icon' => '', 'min' => 'R'],
           'bloqueo'     => ['url' => 'paper/paginas/bloqueo', 'secure' => 'true', 'icon' => '', 'min' => 'LS'],
        ],
            'icon'  => 'ti-bell',
            'url'   => '#pagesExamples',
            'div'   => 'pagesExamples'
        ],
    ];
    return $items;
  }
}
