<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::group(['prefix' => 'paper'], function () {

  Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/overview', 'PaperDashboardController@overview');
    Route::get('/stats', 'PaperDashboardController@stats');
  });

  Route::group(['prefix' => 'componentes'], function () {
    Route::get('/botones', 'PaperDashboardController@button');
    Route::get('/grid', 'PaperDashboardController@grid');
    Route::get('/panel', 'PaperDashboardController@panels');
    Route::get('/sweetalert', 'PaperDashboardController@sweetAlert');
    Route::get('/notificaciones', 'PaperDashboardController@notifications');
    Route::get('/iconos', 'PaperDashboardController@icons');
    Route::get('/tipografia', 'PaperDashboardController@typography');
  });

  Route::group(['prefix' => 'formularios'], function () {
    Route::get('/regular', 'PaperDashboardController@regularForm');
    Route::get('/extended', 'PaperDashboardController@extendedForm');
    Route::get('/validation', 'PaperDashboardController@validationForm');
    Route::get('/wizard', 'PaperDashboardController@wizardForm');
  });

  Route::group(['prefix' => 'tablas'], function () {
    Route::get('/datatables', 'PaperDashboardController@datatables');
    Route::get('/regular', 'PaperDashboardController@regular');
    Route::get('/extended', 'PaperDashboardController@extended');
    Route::get('/bootstrap', 'PaperDashboardController@bootstrap');
  });

  Route::group(['prefix' => 'mapas'], function () {
    Route::get('/google', 'PaperDashboardController@map');
    Route::get('/fullscreen', 'PaperDashboardController@fullscreen');
    Route::get('/vector', 'PaperDashboardController@vector');
  });

  Route::get('/charts', 'PaperDashboardController@charts');
  Route::get('/calendario', 'PaperDashboardController@calendar');

  Route::group(['prefix' => 'paginas'], function () {
    Route::get('/timeline', 'PaperDashboardController@timeline');
    Route::get('/perfil', 'PaperDashboardController@profile');
    Route::get('/login', 'PaperDashboardController@login');
    Route::get('/registro', 'PaperDashboardController@register');
    Route::get('/bloqueo', 'PaperDashboardController@lock');
  });

});


Route::group(['prefix' => 'material'], function () {

  Route::get('/dashboard', 'MaterialDashboardController@dashboard');

  Route::group(['prefix' => 'componentes'], function () {
    Route::get('/tipografia', 'MaterialDashboardController@typography');
    Route::get('/sweetalert', 'MaterialDashboardController@sweetalert');
    Route::get('/iconos', 'MaterialDashboardController@icon');
    Route::get('/botones', 'MaterialDashboardController@button');
    Route::get('/notificaciones', 'MaterialDashboardController@notification');
    Route::get('/grid', 'MaterialDashboardController@grid');
    Route::get('/panel', 'MaterialDashboardController@panel');
  });

  Route::group(['prefix' => 'formularios'], function () {
    Route::get('/regular', 'MaterialDashboardController@regularForm');
    Route::get('/extended', 'MaterialDashboardController@extendedForm');
    Route::get('/validation', 'MaterialDashboardController@validationForm');
    Route::get('/wizard', 'MaterialDashboardController@wizardForm');
  });

  Route::group(['prefix' => 'paginas'], function () {
    Route::get('/perfil', 'MaterialDashboardController@profile');
    Route::get('/timeline', 'MaterialDashboardController@timeline');
    Route::get('/login', 'MaterialDashboardController@login');
    Route::get('/registro', 'MaterialDashboardController@register');
    Route::get('/lock', 'MaterialDashboardController@lock');
    Route::get('/pricing', 'MaterialDashboardController@pricing');
  });

  Route::group(['prefix' => 'tablas'], function () {
    Route::get('/datatables', 'MaterialDashboardController@datatables');
    Route::get('/regular', 'MaterialDashboardController@regular');
    Route::get('/extended', 'MaterialDashboardController@extended');
  });

  Route::group(['prefix' => 'mapas'], function () {
    Route::get('/google', 'MaterialDashboardController@map');
    Route::get('/fullscreen', 'MaterialDashboardController@fullscreen');
    Route::get('/vector', 'MaterialDashboardController@vector');
  });

  Route::get('/widgets', 'MaterialDashboardController@widgets');
  Route::get('/charts', 'MaterialDashboardController@charts');
  Route::get('/calendario', 'MaterialDashboardController@calendar');

});


Route::group(['prefix' => 'light'], function () {

  Route::get('/dashboard', 'LightDashboardController@dashboard');

  Route::group(['prefix' => 'componentes'], function () {
    Route::get('/tipografia', 'LightDashboardController@typography');
    Route::get('/sweetalert', 'LightDashboardController@sweetalert');
    Route::get('/iconos', 'LightDashboardController@icon');
    Route::get('/botones', 'LightDashboardController@button');
    Route::get('/notificaciones', 'LightDashboardController@notification');
    Route::get('/grid', 'LightDashboardController@grid');
    Route::get('/panel', 'LightDashboardController@panel');
  });

  Route::group(['prefix' => 'formularios'], function () {
    Route::get('/regular', 'LightDashboardController@regularForm');
    Route::get('/extended', 'LightDashboardController@extendedForm');
    Route::get('/validation', 'LightDashboardController@validationForm');
    Route::get('/wizard', 'LightDashboardController@wizardForm');
  });

  Route::group(['prefix' => 'paginas'], function () {
    Route::get('/perfil', 'LightDashboardController@profile');
    Route::get('/timeline', 'LightDashboardController@timeline');
    Route::get('/login', 'LightDashboardController@login');
    Route::get('/registro', 'LightDashboardController@register');
    Route::get('/lock', 'LightDashboardController@lock');
    Route::get('/pricing', 'LightDashboardController@pricing');
  });

  Route::group(['prefix' => 'tablas'], function () {
    Route::get('/datatables', 'LightDashboardController@datatables');
    Route::get('/regular', 'LightDashboardController@regular');
    Route::get('/extended', 'LightDashboardController@extended');
    Route::get('/bootstrap', 'LightDashboardController@bootstrap');
  });

  Route::group(['prefix' => 'mapas'], function () {
    Route::get('/google', 'LightDashboardController@map');
    Route::get('/fullscreen', 'LightDashboardController@fullscreen');
    Route::get('/vector', 'LightDashboardController@vector');
  });

  Route::get('/charts', 'LightDashboardController@charts');
  Route::get('/calendario', 'LightDashboardController@calendar');

});