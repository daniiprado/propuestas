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
        'dashboard'       => ['url' => 'paper/dashboard', 'secure' => 'false', 'icon' => 'ti-panel'],
        'perfil'          => ['url' => 'paper/perfil', 'secure' => 'false', 'icon' => 'ti-user'],
        'tablas'          => ['url' => 'paper/tablas', 'secure' => 'false', 'icon' => 'ti-view-list-alt'],
        'componentes'     => ['submenu' => [
                                'tipografia'  => ['url' => 'paper/componentes/tipografia', 'secure' => 'false', 'icon' => 'ti-text', 'min' => ''],
                                'iconos'      => ['url' => 'paper/componentes/iconos', 'secure' => 'false', 'icon' => 'ti-pencil-alt2', 'min' => ''],
                                'botones'     => ['url' => 'paper/componentes/botones', 'secure' => 'false', 'icon' => '', 'min' => 'B'],
                                ],
                              'icon'  => 'ti-package',
                              'url'   => '#componentsExamples',
                              'div'   => 'componentsExamples'
                              ],
        'formularios'     => ['submenu' => [
                                'regular_forms'     => ['url' => 'paper/formularios/regular', 'secure' => 'false', 'icon' => '', 'min' => 'RF'],
                                'extended_forms'    => ['url' => 'paper/formularios/extended', 'secure' => 'false', 'icon' => '', 'min' => 'EF'],
                                'validation_forms'  => ['url' => 'paper/formularios/validation', 'secure' => 'false', 'icon' => '', 'min' => 'VF'],
                                'wizard'            => ['url' => 'paper/formularios/wizard', 'secure' => 'false', 'icon' => '', 'min' => 'W'],
                                ],
                              'icon'  => 'ti-clipboard',
                              'url'   => '#formsExamples',
                              'div'   => 'formsExamples'
                              ],
        'mapas'           => ['url' => 'paper/mapas', 'secure' => 'false', 'icon' => 'ti-map'],
        'notificaciones'  => ['url' => 'paper/notificaciones', 'secure' => 'false', 'icon' => 'ti-bell'],
        'calendario'  => ['url' => 'paper/calendario', 'secure' => 'false', 'icon' => 'ti-calendar'],
        'paginas'     => ['submenu' => [
            'timeline'            => ['url' => 'paper/paginas/timeline', 'secure' => 'false', 'icon' => '', 'min' => 'TL'],
            'inicio_de_sesion'    => ['url' => 'paper/paginas/login', 'secure' => 'false', 'icon' => '', 'min' => 'IS'],
            'registro'            => ['url' => 'paper/paginas/registro', 'secure' => 'false', 'icon' => '', 'min' => 'R'],
            'bloqueo'             => ['url' => 'paper/paginas/bloqueo', 'secure' => 'false', 'icon' => '', 'min' => 'B'],
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
        'dashboard'       => ['url' => 'material/dashboard', 'secure' => 'false', 'icon' => 'dashboard'],
        'paginas'     => ['submenu' => [
            'timeline'            => ['url' => 'material/paginas/timeline', 'secure' => 'false', 'icon' => ''],
            'perfil'              => ['url' => 'material/paginas/perfil', 'secure' => 'false', 'icon' => ''],
            'inicio_de_sesion'    => ['url' => 'material/paginas/login', 'secure' => 'false', 'icon' => ''],
            'registro'            => ['url' => 'material/paginas/registro', 'secure' => 'false', 'icon' => ''],
            'lock'                => ['url' => 'material/paginas/lock', 'secure' => 'false', 'icon' => ''],
            'pricing'             => ['url' => 'material/paginas/pricing', 'secure' => 'false', 'icon' => ''],
        ],
            'icon'  => 'image',
            'url'   => '#pagesExamples',
            'div'   => 'pagesExamples'
        ],
        'componentes'     => ['submenu' => [
            'tipografia'  => ['url' => 'material/componentes/tipografia', 'secure' => 'false', 'icon' => ''],
            'sweetalert'  => ['url' => 'material/componentes/sweetalert', 'secure' => 'false', 'icon' => ''],
            'iconos'      => ['url' => 'material/componentes/iconos', 'secure' => 'false', 'icon' => ''],
            'botones'     => ['url' => 'material/componentes/botones', 'secure' => 'false', 'icon' => ''],
            'notificaciones'  => ['url' => 'material/componentes/notificaciones', 'secure' => 'false', 'icon' => ''],
            'grid'  => ['url' => 'material/componentes/grid', 'secure' => 'false', 'icon' => ''],
            'panel'  => ['url' => 'material/componentes/panel', 'secure' => 'false', 'icon' => ''],
        ],
            'icon'  => 'view_module',
            'url'   => '#componentsExamples',
            'div'   => 'componentsExamples'
        ],
        'formularios'     => ['submenu' => [
            'regular_forms'     => ['url' => 'material/formularios/regular', 'secure' => 'false', 'icon' => ''],
            'extended_forms'    => ['url' => 'material/formularios/extended', 'secure' => 'false', 'icon' => ''],
            'validation_forms'  => ['url' => 'material/formularios/validation', 'secure' => 'false', 'icon' => ''],
            'wizard'            => ['url' => 'material/formularios/wizard', 'secure' => 'false', 'icon' => ''],
        ],
            'icon'  => 'content_paste',
            'url'   => '#formsExamples',
            'div'   => 'formsExamples'
        ],
        'tablas'     => ['submenu' => [
            'datatables'          => ['url' => 'material/tablas/datatables', 'secure' => 'false', 'icon' => ''],
            'regular'          => ['url' => 'material/tablas/regular', 'secure' => 'false', 'icon' => ''],
            'extended'          => ['url' => 'material/tablas/extended', 'secure' => 'false', 'icon' => ''],
        ],
            'icon'  => 'grid_on',
            'url'   => '#tablesExamples',
            'div'   => 'tablesExamples'
        ],
        'mapas'     => ['submenu' => [
            'google'           => ['url' => 'material/mapas/google', 'secure' => 'false', 'icon' => ''],
            'fullscreen'           => ['url' => 'material/mapas/fullscreen', 'secure' => 'false', 'icon' => ''],
            'vector'           => ['url' => 'material/mapas/vector', 'secure' => 'false', 'icon' => ''],
        ],
            'icon'  => 'place',
            'url'   => '#mapsExamples',
            'div'   => 'mapsExamples'
        ],
        'widgets'  => ['url' => 'material/widgets', 'secure' => 'false', 'icon' => 'widgets'],
        'charts'  => ['url' => 'material/charts', 'secure' => 'false', 'icon' => 'timeline'],
        'calendario'  => ['url' => 'material/calendario', 'secure' => 'false', 'icon' => 'date_range'],
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
        'dashboard'       => ['url' => 'light/dashboard', 'secure' => 'false', 'icon' => 'pe-7s-graph'],
        'paginas'     => ['submenu' => [
            'perfil'              => ['url' => 'light/paginas/perfil', 'secure' => 'false', 'icon' => ''],
            'inicio_de_sesion'    => ['url' => 'light/paginas/login', 'secure' => 'false', 'icon' => ''],
            'registro'            => ['url' => 'light/paginas/registro', 'secure' => 'false', 'icon' => ''],
            'lock'                => ['url' => 'light/paginas/lock', 'secure' => 'false', 'icon' => ''],
        ],
            'icon'  => 'pe-7s-gift',
            'url'   => '#pagesExamples',
            'div'   => 'pagesExamples'
        ],
        'componentes'     => ['submenu' => [
            'tipografia'  => ['url' => 'light/componentes/tipografia', 'secure' => 'false', 'icon' => ''],
            'sweetalert'  => ['url' => 'light/componentes/sweetalert', 'secure' => 'false', 'icon' => ''],
            'iconos'      => ['url' => 'light/componentes/iconos', 'secure' => 'false', 'icon' => ''],
            'botones'     => ['url' => 'light/componentes/botones', 'secure' => 'false', 'icon' => ''],
            'notificaciones'  => ['url' => 'light/componentes/notificaciones', 'secure' => 'false', 'icon' => ''],
            'grid'  => ['url' => 'light/componentes/grid', 'secure' => 'false', 'icon' => ''],
            'panel'  => ['url' => 'light/componentes/panel', 'secure' => 'false', 'icon' => ''],
        ],
            'icon'  => 'pe-7s-plugin',
            'url'   => '#componentsExamples',
            'div'   => 'componentsExamples'
        ],
        'formularios'     => ['submenu' => [
            'regular_forms'     => ['url' => 'light/formularios/regular', 'secure' => 'false', 'icon' => ''],
            'extended_forms'    => ['url' => 'light/formularios/extended', 'secure' => 'false', 'icon' => ''],
            'validation_forms'  => ['url' => 'light/formularios/validation', 'secure' => 'false', 'icon' => ''],
            'wizard'            => ['url' => 'light/formularios/wizard', 'secure' => 'false', 'icon' => ''],
        ],
            'icon'  => 'pe-7s-note2',
            'url'   => '#formsExamples',
            'div'   => 'formsExamples'
        ],
        'tablas'     => ['submenu' => [
            'datatables'          => ['url' => 'light/tablas/datatables', 'secure' => 'false', 'icon' => ''],
            'regular'          => ['url' => 'light/tablas/regular', 'secure' => 'false', 'icon' => ''],
            'extended'          => ['url' => 'light/tablas/extended', 'secure' => 'false', 'icon' => ''],
            'bootstrap'          => ['url' => 'light/tablas/bootstrap', 'secure' => 'false', 'icon' => ''],
        ],
            'icon'  => 'pe-7s-news-paper',
            'url'   => '#tablesExamples',
            'div'   => 'tablesExamples'
        ],
        'mapas'     => ['submenu' => [
            'google'           => ['url' => 'light/mapas/google', 'secure' => 'false', 'icon' => ''],
            'fullscreen'           => ['url' => 'light/mapas/fullscreen', 'secure' => 'false', 'icon' => ''],
            'vector'           => ['url' => 'light/mapas/vector', 'secure' => 'false', 'icon' => ''],
        ],
            'icon'  => 'pe-7s-map-marker',
            'url'   => '#mapsExamples',
            'div'   => 'mapsExamples'
        ],
        'charts'  => ['url' => 'light/charts', 'secure' => 'false', 'icon' => 'pe-7s-graph1'],
        'calendario'  => ['url' => 'light/calendario', 'secure' => 'false', 'icon' => 'pe-7s-date'],
    ];
    return $items;
  }
}
