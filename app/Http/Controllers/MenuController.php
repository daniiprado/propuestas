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
        'dashboard'       => ['url' => 'paper/dashboard', 'secure' => 'true', 'icon' => 'ti-panel'],
        'perfil'          => ['url' => 'paper/perfil', 'secure' => 'true', 'icon' => 'ti-user'],
        'tablas'          => ['url' => 'paper/tablas', 'secure' => 'true', 'icon' => 'ti-view-list-alt'],
        'componentes'     => ['submenu' => [
                                'tipografia'  => ['url' => 'paper/componentes/tipografia', 'secure' => 'true', 'icon' => 'ti-text', 'min' => ''],
                                'iconos'      => ['url' => 'paper/componentes/iconos', 'secure' => 'true', 'icon' => 'ti-pencil-alt2', 'min' => ''],
                                'botones'     => ['url' => 'paper/componentes/botones', 'secure' => 'true', 'icon' => '', 'min' => 'B'],
                                ],
                              'icon'  => 'ti-package',
                              'url'   => '#componentsExamples',
                              'div'   => 'componentsExamples'
                              ],
        'formularios'     => ['submenu' => [
                                'regular_forms'     => ['url' => 'paper/formularios/regular', 'secure' => 'true', 'icon' => '', 'min' => 'RF'],
                                'extended_forms'    => ['url' => 'paper/formularios/extended', 'secure' => 'true', 'icon' => '', 'min' => 'EF'],
                                'validation_forms'  => ['url' => 'paper/formularios/validation', 'secure' => 'true', 'icon' => '', 'min' => 'VF'],
                                'wizard'            => ['url' => 'paper/formularios/wizard', 'secure' => 'true', 'icon' => '', 'min' => 'W'],
                                ],
                              'icon'  => 'ti-clipboard',
                              'url'   => '#formsExamples',
                              'div'   => 'formsExamples'
                              ],
        'mapas'           => ['url' => 'paper/mapas', 'secure' => 'true', 'icon' => 'ti-map'],
        'notificaciones'  => ['url' => 'paper/notificaciones', 'secure' => 'true', 'icon' => 'ti-bell'],
        'calendario'  => ['url' => 'paper/calendario', 'secure' => 'true', 'icon' => 'ti-calendar'],
        'paginas'     => ['submenu' => [
            'timeline'            => ['url' => 'paper/paginas/timeline', 'secure' => 'true', 'icon' => '', 'min' => 'TL'],
            'inicio_de_sesion'    => ['url' => 'paper/paginas/login', 'secure' => 'true', 'icon' => '', 'min' => 'IS'],
            'registro'            => ['url' => 'paper/paginas/registro', 'secure' => 'true', 'icon' => '', 'min' => 'R'],
            'bloqueo'             => ['url' => 'paper/paginas/bloqueo', 'secure' => 'true', 'icon' => '', 'min' => 'B'],
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
}
