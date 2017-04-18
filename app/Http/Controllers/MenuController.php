<?php

namespace Propuesta\Http\Controllers;

class MenuController extends Controller
{
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
        'color' => 'udec',
        'active-color' => 'udec-success',
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
        'dashboard'       => ['url' => 'paper/dashboard', , 'icon' => 'ti-panel'],
        'perfil'          => ['url' => 'paper/perfil', , 'icon' => 'ti-user'],
        'tablas'          => ['url' => 'paper/tablas', , 'icon' => 'ti-view-list-alt'],
        'componentes'     => ['submenu' => [
                                'tipografia'  => ['url' => 'paper/componentes/tipografia', , 'icon' => 'ti-text', 'min' => ''],
                                'iconos'      => ['url' => 'paper/componentes/iconos', , 'icon' => 'ti-pencil-alt2', 'min' => ''],
                                'botones'     => ['url' => 'paper/componentes/botones', , 'icon' => '', 'min' => 'B'],
                                ],
                              'icon'  => 'ti-package',
                              'url'   => '#componentsExamples',
                              'div'   => 'componentsExamples'
                              ],
        'formularios'     => ['submenu' => [
                                'regular_forms'     => ['url' => 'paper/formularios/regular', , 'icon' => '', 'min' => 'RF'],
                                'extended_forms'    => ['url' => 'paper/formularios/extended', , 'icon' => '', 'min' => 'EF'],
                                'validation_forms'  => ['url' => 'paper/formularios/validation', , 'icon' => '', 'min' => 'VF'],
                                'wizard'            => ['url' => 'paper/formularios/wizard', , 'icon' => '', 'min' => 'W'],
                                ],
                              'icon'  => 'ti-clipboard',
                              'url'   => '#formsExamples',
                              'div'   => 'formsExamples'
                              ],
        'mapas'           => ['url' => 'paper/mapas', , 'icon' => 'ti-map'],
        'notificaciones'  => ['url' => 'paper/notificaciones', , 'icon' => 'ti-bell'],
        'calendario'  => ['url' => 'paper/calendario', , 'icon' => 'ti-calendar'],
        'paginas'     => ['submenu' => [
            'timeline'            => ['url' => 'paper/paginas/timeline', , 'icon' => '', 'min' => 'TL'],
            'inicio_de_sesion'    => ['url' => 'paper/paginas/login', , 'icon' => '', 'min' => 'IS'],
            'registro'            => ['url' => 'paper/paginas/registro', , 'icon' => '', 'min' => 'R'],
            'bloqueo'             => ['url' => 'paper/paginas/bloqueo', , 'icon' => '', 'min' => 'B'],
        ],
            'icon'  => 'ti-image',
            'url'   => '#pagesExamples',
            'div'   => 'pagesExamples'
        ],
    ];
    return $items;
  }

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
      'color' => 'black',
      /* purple | blue | green | orange | red | rose */
      'active-color' => 'green',
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
        'dashboard'       => ['url' => 'material/dashboard', , 'icon' => 'dashboard'],
        'paginas'     => ['submenu' => [
            'timeline'            => ['url' => 'material/paginas/timeline', , 'icon' => ''],
            'perfil'              => ['url' => 'material/paginas/perfil', , 'icon' => ''],
            'inicio_de_sesion'    => ['url' => 'material/paginas/login', , 'icon' => ''],
            'registro'            => ['url' => 'material/paginas/registro', , 'icon' => ''],
            'lock'                => ['url' => 'material/paginas/lock', , 'icon' => ''],
            'pricing'             => ['url' => 'material/paginas/pricing', , 'icon' => ''],
        ],
            'icon'  => 'image',
            'url'   => '#pagesExamples',
            'div'   => 'pagesExamples'
        ],
        'componentes'     => ['submenu' => [
            'tipografia'  => ['url' => 'material/componentes/tipografia', , 'icon' => ''],
            'sweetalert'  => ['url' => 'material/componentes/sweetalert', , 'icon' => ''],
            'iconos'      => ['url' => 'material/componentes/iconos', , 'icon' => ''],
            'botones'     => ['url' => 'material/componentes/botones', , 'icon' => ''],
            'notificaciones'  => ['url' => 'material/componentes/notificaciones', , 'icon' => ''],
            'grid'  => ['url' => 'material/componentes/grid', , 'icon' => ''],
            'panel'  => ['url' => 'material/componentes/panel', , 'icon' => ''],
        ],
            'icon'  => 'view_module',
            'url'   => '#componentsExamples',
            'div'   => 'componentsExamples'
        ],
        'formularios'     => ['submenu' => [
            'regular_forms'     => ['url' => 'material/formularios/regular', , 'icon' => ''],
            'extended_forms'    => ['url' => 'material/formularios/extended', , 'icon' => ''],
            'validation_forms'  => ['url' => 'material/formularios/validation', , 'icon' => ''],
            'wizard'            => ['url' => 'material/formularios/wizard', , 'icon' => ''],
        ],
            'icon'  => 'content_paste',
            'url'   => '#formsExamples',
            'div'   => 'formsExamples'
        ],
        'tablas'     => ['submenu' => [
            'datatables'          => ['url' => 'material/tablas/datatables', , 'icon' => ''],
            'regular'          => ['url' => 'material/tablas/regular', , 'icon' => ''],
            'extended'          => ['url' => 'material/tablas/extended', , 'icon' => ''],
        ],
            'icon'  => 'grid_on',
            'url'   => '#tablesExamples',
            'div'   => 'tablesExamples'
        ],
        'mapas'     => ['submenu' => [
            'google'           => ['url' => 'material/mapas/google', , 'icon' => ''],
            'fullscreen'           => ['url' => 'material/mapas/fullscreen', , 'icon' => ''],
            'vector'           => ['url' => 'material/mapas/vector', , 'icon' => ''],
        ],
            'icon'  => 'place',
            'url'   => '#mapsExamples',
            'div'   => 'mapsExamples'
        ],
        'widgets'  => ['url' => 'material/widgets', , 'icon' => 'widgets'],
        'charts'  => ['url' => 'material/charts', , 'icon' => 'timeline'],
        'calendario'  => ['url' => 'material/calendario', , 'icon' => 'date_range'],
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
        'dashboard'       => ['url' => 'light/dashboard', , 'icon' => 'pe-7s-graph'],
        'paginas'     => ['submenu' => [
            'perfil'              => ['url' => 'light/paginas/perfil', , 'icon' => ''],
            'inicio_de_sesion'    => ['url' => 'light/paginas/login', , 'icon' => ''],
            'registro'            => ['url' => 'light/paginas/registro', , 'icon' => ''],
            'lock'                => ['url' => 'light/paginas/lock', , 'icon' => ''],
        ],
            'icon'  => 'pe-7s-gift',
            'url'   => '#pagesExamples',
            'div'   => 'pagesExamples'
        ],
        'componentes'     => ['submenu' => [
            'tipografia'  => ['url' => 'light/componentes/tipografia', , 'icon' => ''],
            'sweetalert'  => ['url' => 'light/componentes/sweetalert', , 'icon' => ''],
            'iconos'      => ['url' => 'light/componentes/iconos', , 'icon' => ''],
            'botones'     => ['url' => 'light/componentes/botones', , 'icon' => ''],
            'notificaciones'  => ['url' => 'light/componentes/notificaciones', , 'icon' => ''],
            'grid'  => ['url' => 'light/componentes/grid', , 'icon' => ''],
            'panel'  => ['url' => 'light/componentes/panel', , 'icon' => ''],
        ],
            'icon'  => 'pe-7s-plugin',
            'url'   => '#componentsExamples',
            'div'   => 'componentsExamples'
        ],
        'formularios'     => ['submenu' => [
            'regular_forms'     => ['url' => 'light/formularios/regular', , 'icon' => ''],
            'extended_forms'    => ['url' => 'light/formularios/extended', , 'icon' => ''],
            'validation_forms'  => ['url' => 'light/formularios/validation', , 'icon' => ''],
            'wizard'            => ['url' => 'light/formularios/wizard', , 'icon' => ''],
        ],
            'icon'  => 'pe-7s-note2',
            'url'   => '#formsExamples',
            'div'   => 'formsExamples'
        ],
        'tablas'     => ['submenu' => [
            'datatables'          => ['url' => 'light/tablas/datatables', , 'icon' => ''],
            'regular'          => ['url' => 'light/tablas/regular', , 'icon' => ''],
            'extended'          => ['url' => 'light/tablas/extended', , 'icon' => ''],
            'bootstrap'          => ['url' => 'light/tablas/bootstrap', , 'icon' => ''],
        ],
            'icon'  => 'pe-7s-news-paper',
            'url'   => '#tablesExamples',
            'div'   => 'tablesExamples'
        ],
        'mapas'     => ['submenu' => [
            'google'           => ['url' => 'light/mapas/google', , 'icon' => ''],
            'fullscreen'           => ['url' => 'light/mapas/fullscreen', , 'icon' => ''],
            'vector'           => ['url' => 'light/mapas/vector', , 'icon' => ''],
        ],
            'icon'  => 'pe-7s-map-marker',
            'url'   => '#mapsExamples',
            'div'   => 'mapsExamples'
        ],
        'charts'  => ['url' => 'light/charts', , 'icon' => 'pe-7s-graph1'],
        'calendario'  => ['url' => 'light/calendario', , 'icon' => 'pe-7s-date'],
    ];
    return $items;
  }
}
