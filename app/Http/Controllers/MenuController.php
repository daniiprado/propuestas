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
        'dashboard'       => ['url' => 'material/dashboard',  'icon' => 'dashboard'],
        'paginas'     => ['submenu' => [
            'timeline'            => ['url' => 'material/paginas/timeline',  'icon' => ''],
            'perfil'              => ['url' => 'material/paginas/perfil',  'icon' => ''],
            'inicio_de_sesion'    => ['url' => 'material/paginas/login',  'icon' => ''],
            'registro'            => ['url' => 'material/paginas/registro',  'icon' => ''],
            'lock'                => ['url' => 'material/paginas/lock',  'icon' => ''],
            'pricing'             => ['url' => 'material/paginas/pricing',  'icon' => ''],
        ],
            'icon'  => 'image',
            'url'   => '#pagesExamples',
            'div'   => 'pagesExamples'
        ],
        'componentes'     => ['submenu' => [
            'tipografia'  => ['url' => 'material/componentes/tipografia',  'icon' => ''],
            'sweetalert'  => ['url' => 'material/componentes/sweetalert',  'icon' => ''],
            'iconos'      => ['url' => 'material/componentes/iconos',  'icon' => ''],
            'botones'     => ['url' => 'material/componentes/botones',  'icon' => ''],
            'notificaciones'  => ['url' => 'material/componentes/notificaciones',  'icon' => ''],
            'grid'  => ['url' => 'material/componentes/grid',  'icon' => ''],
            'panel'  => ['url' => 'material/componentes/panel',  'icon' => ''],
        ],
            'icon'  => 'view_module',
            'url'   => '#componentsExamples',
            'div'   => 'componentsExamples'
        ],
        'formularios'     => ['submenu' => [
            'regular_forms'     => ['url' => 'material/formularios/regular',  'icon' => ''],
            'extended_forms'    => ['url' => 'material/formularios/extended',  'icon' => ''],
            'validation_forms'  => ['url' => 'material/formularios/validation',  'icon' => ''],
            'wizard'            => ['url' => 'material/formularios/wizard',  'icon' => ''],
        ],
            'icon'  => 'content_paste',
            'url'   => '#formsExamples',
            'div'   => 'formsExamples'
        ],
        'tablas'     => ['submenu' => [
            'datatables'          => ['url' => 'material/tablas/datatables',  'icon' => ''],
            'regular'          => ['url' => 'material/tablas/regular',  'icon' => ''],
            'extended'          => ['url' => 'material/tablas/extended',  'icon' => ''],
        ],
            'icon'  => 'grid_on',
            'url'   => '#tablesExamples',
            'div'   => 'tablesExamples'
        ],
        'mapas'     => ['submenu' => [
            'google'           => ['url' => 'material/mapas/google',  'icon' => ''],
            'fullscreen'           => ['url' => 'material/mapas/fullscreen',  'icon' => ''],
            'vector'           => ['url' => 'material/mapas/vector',  'icon' => ''],
        ],
            'icon'  => 'place',
            'url'   => '#mapsExamples',
            'div'   => 'mapsExamples'
        ],
        'widgets'  => ['url' => 'material/widgets',  'icon' => 'widgets'],
        'charts'  => ['url' => 'material/charts',  'icon' => 'timeline'],
        'calendario'  => ['url' => 'material/calendario',  'icon' => 'date_range'],
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
        'dashboard'       => ['url' => 'light/dashboard',  'icon' => 'pe-7s-graph'],
        'paginas'     => ['submenu' => [
            'perfil'              => ['url' => 'light/paginas/perfil',  'icon' => ''],
            'inicio_de_sesion'    => ['url' => 'light/paginas/login',  'icon' => ''],
            'registro'            => ['url' => 'light/paginas/registro',  'icon' => ''],
            'lock'                => ['url' => 'light/paginas/lock',  'icon' => ''],
        ],
            'icon'  => 'pe-7s-gift',
            'url'   => '#pagesExamples',
            'div'   => 'pagesExamples'
        ],
        'componentes'     => ['submenu' => [
            'tipografia'  => ['url' => 'light/componentes/tipografia',  'icon' => ''],
            'sweetalert'  => ['url' => 'light/componentes/sweetalert',  'icon' => ''],
            'iconos'      => ['url' => 'light/componentes/iconos',  'icon' => ''],
            'botones'     => ['url' => 'light/componentes/botones',  'icon' => ''],
            'notificaciones'  => ['url' => 'light/componentes/notificaciones',  'icon' => ''],
            'grid'  => ['url' => 'light/componentes/grid',  'icon' => ''],
            'panel'  => ['url' => 'light/componentes/panel',  'icon' => ''],
        ],
            'icon'  => 'pe-7s-plugin',
            'url'   => '#componentsExamples',
            'div'   => 'componentsExamples'
        ],
        'formularios'     => ['submenu' => [
            'regular_forms'     => ['url' => 'light/formularios/regular',  'icon' => ''],
            'extended_forms'    => ['url' => 'light/formularios/extended',  'icon' => ''],
            'validation_forms'  => ['url' => 'light/formularios/validation',  'icon' => ''],
            'wizard'            => ['url' => 'light/formularios/wizard',  'icon' => ''],
        ],
            'icon'  => 'pe-7s-note2',
            'url'   => '#formsExamples',
            'div'   => 'formsExamples'
        ],
        'tablas'     => ['submenu' => [
            'datatables'          => ['url' => 'light/tablas/datatables',  'icon' => ''],
            'regular'          => ['url' => 'light/tablas/regular',  'icon' => ''],
            'extended'          => ['url' => 'light/tablas/extended',  'icon' => ''],
            'bootstrap'          => ['url' => 'light/tablas/bootstrap',  'icon' => ''],
        ],
            'icon'  => 'pe-7s-news-paper',
            'url'   => '#tablesExamples',
            'div'   => 'tablesExamples'
        ],
        'mapas'     => ['submenu' => [
            'google'           => ['url' => 'light/mapas/google',  'icon' => ''],
            'fullscreen'           => ['url' => 'light/mapas/fullscreen',  'icon' => ''],
            'vector'           => ['url' => 'light/mapas/vector',  'icon' => ''],
        ],
            'icon'  => 'pe-7s-map-marker',
            'url'   => '#mapsExamples',
            'div'   => 'mapsExamples'
        ],
        'charts'  => ['url' => 'light/charts',  'icon' => 'pe-7s-graph1'],
        'calendario'  => ['url' => 'light/calendario',  'icon' => 'pe-7s-date'],
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
              'overview' => ['url' => 'paper/dashboard/overview',  'icon' => '', 'min' => 'OV'],
              'stats'    => ['url' => 'paper/dashboard/stats',  'icon' => '', 'min' => 'S'],
          ],
            'icon'  => 'ti-panel',
            'url'   => '#dashboardExamples',
            'div'   => 'dashboardExamples'
        ],
        'componentes'     => ['submenu' => [
            'botones'     => ['url' => 'paper/componentes/botones',  'icon' => '', 'min' => 'B'],
            'grid'  => ['url' => 'paper/componentes/grid',  'icon' => '', 'min' => 'G'],
            'panel'  => ['url' => 'paper/componentes/panel',  'icon' => '', 'min' => 'P'],
            'sweetalert'  => ['url' => 'paper/componentes/sweetalert',  'icon' => '', 'min' => 'SA'],
            'notificaciones'  => ['url' => 'paper/componentes/notificaciones',  'icon' => '', 'min' => 'N'],
            'iconos'      => ['url' => 'paper/componentes/iconos',  'icon' => '', 'min' => 'I'],
            'tipografia'  => ['url' => 'paper/componentes/tipografia',  'icon' => '', 'min' => 'T'],
        ],
            'icon'  => 'ti-package',
            'url'   => '#componentsExamples',
            'div'   => 'componentsExamples'
        ],
        'formularios'     => ['submenu' => [
            'regular_forms'     => ['url' => 'paper/formularios/regular',  'icon' => '', 'min' => 'RF'],
            'extended_forms'  => ['url' => 'paper/formularios/extended',  'icon' => '', 'min' => 'EF'],
            'validation_forms'  => ['url' => 'paper/formularios/validation',  'icon' => '', 'min' => 'VF'],
            'wizard_forms'  => ['url' => 'paper/formularios/wizard',  'icon' => '', 'min' => 'WF'],
        ],
            'icon'  => 'ti-clipboard',
            'url'   => '#formsExamples',
            'div'   => 'formsExamples'
        ],

        'tablas'     => ['submenu' => [
            'regular_tables'     => ['url' => 'paper/tablas/regular',  'icon' => '', 'min' => 'RT'],
            'extended_tables'  => ['url' => 'paper/tablas/extended',  'icon' => '', 'min' => 'ET'],
            'bootstrap_tables'  => ['url' => 'paper/tablas/bootstrap',  'icon' => '', 'min' => 'BT'],
            'data_tables'  => ['url' => 'paper/tablas/datatables',  'icon' => '', 'min' => 'DT'],
        ],
            'icon'  => 'ti-view-list-alt',
            'url'   => '#tablesExamples',
            'div'   => 'tablesExamples'
        ],

        'mapas'     => ['submenu' => [
            'google_maps'     => ['url' => 'paper/mapas/google',  'icon' => '', 'min' => 'GM'],
            'vector_maps'  => ['url' => 'paper/mapas/vector',  'icon' => '', 'min' => 'VM'],
            'fullscreen_maps'  => ['url' => 'paper/mapas/fullscreen',  'icon' => '', 'min' => 'FSM'],
        ],
            'icon'  => 'ti-map',
            'url'   => '#mapsExamples',
            'div'   => 'mapsExamples'
        ],
        'charts'  => ['url' => 'paper/charts',  'icon' => 'ti-bar-chart-alt'],
        'calendario'  => ['url' => 'paper/calendario',  'icon' => 'ti-calendar'],
        'paginas'     => ['submenu' => [
           'timeline'     => ['url' => 'paper/paginas/timeline',  'icon' => '', 'min' => 'TL'],
           'perfil'     => ['url' => 'paper/paginas/perfil',  'icon' => '', 'min' => 'P'],
           'login'     => ['url' => 'paper/paginas/login',  'icon' => '', 'min' => 'L'],
           'registro'     => ['url' => 'paper/paginas/registro',  'icon' => '', 'min' => 'R'],
           'bloqueo'     => ['url' => 'paper/paginas/bloqueo',  'icon' => '', 'min' => 'LS'],
        ],
            'icon'  => 'ti-bell',
            'url'   => '#pagesExamples',
            'div'   => 'pagesExamples'
        ],
    ];
    return $items;
  }
}
