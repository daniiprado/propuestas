<?php

namespace Propuesta\Http\Controllers;

class PaperDashboardController extends Controller
{
  /****************** DASHBOARD ******************/

  /**
   * Display a Dashboard Overview View.
   *
   * @return \Illuminate\Http\Response
   */
  public function overview()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.dashboard.overview', compact('items', 'user'));
  }

  /**
   * Display a Dashboard Stats View.
   *
   * @return \Illuminate\Http\Response
   */
  public function stats()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.dashboard.stats', compact('items', 'user'));
  }

  /****************** COMPONENTS ******************/

  /**
   * Display a Dashboard Buttons View.
   *
   * @return \Illuminate\Http\Response
   */
  public function button()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.components.buttons', compact('items', 'user'));
  }

  /**
   * Display a Dashboard Grid View.
   *
   * @return \Illuminate\Http\Response
   */
  public function grid()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.components.grid', compact('items', 'user'));
  }

  /**
   * Display a Dashboard Panels View.
   *
   * @return \Illuminate\Http\Response
   */
  public function panels()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.components.panels', compact('items', 'user'));
  }

  /**
   * Display a Dashboard Sweet Alert View.
   *
   * @return \Illuminate\Http\Response
   */
  public function sweetAlert()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.components.sweetalert', compact('items', 'user'));
  }

  /**
   * Display a Dashboard Notifications View.
   *
   * @return \Illuminate\Http\Response
   */
  public function notifications()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.components.notifications', compact('items', 'user'));
  }

  /**
   * Display a Dashboard Icons View.
   *
   * @return \Illuminate\Http\Response
   */
  public function icons()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.components.icons', compact('items', 'user'));
  }

  /**
   * Display a Dashboard Typography View.
   *
   * @return \Illuminate\Http\Response
   */
  public function typography()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.components.typography', compact('items', 'user'));
  }

  /****************** FORMS ******************/

  /**
   * Display a Extended Form View.
   *
   * @return \Illuminate\Http\Response
   */
  public function extendedForm()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.forms.extended', compact('items', 'user'));
  }

  /**
   * Display a Regular Form View.
   *
   * @return \Illuminate\Http\Response
   */
  public function regularForm()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.forms.regular', compact('items', 'user'));
  }

  /**
   * Display a Wizard Form View.
   *
   * @return \Illuminate\Http\Response
   */
  public function wizardForm()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.forms.wizard', compact('items', 'user'));
  }

  /**
   * Display a Validation Form View.
   *
   * @return \Illuminate\Http\Response
   */
  public function validationForm()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.forms.validation', compact('items', 'user'));
  }

  /****************** TABLES ******************/

  /**
   * Display a Data Tables View.
   *
   * @return \Illuminate\Http\Response
   */
  public function datatables()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.tables.datatable', compact('items', 'user'));
  }

  /**
   * Display a Regular Tables View.
   *
   * @return \Illuminate\Http\Response
   */
  public function regular()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.tables.regular', compact('items', 'user'));
  }

  /**
   * Display a Extended Tables View.
   *
   * @return \Illuminate\Http\Response
   */
  public function extended()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.tables.extended', compact('items', 'user'));
  }

  /**
   * Display a Bootstrap Tables View.
   *
   * @return \Illuminate\Http\Response
   */
  public function bootstrap()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.tables.bootstrap', compact('items', 'user'));
  }

  /****************** MAPS ******************/

  /**
   * Display a Maps View.
   *
   * @return \Illuminate\Http\Response
   */
  public function map()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.maps.google', compact('items', 'user'));
  }

  /**
   * Display a Fullscreen Map View.
   *
   * @return \Illuminate\Http\Response
   */
  public function fullscreen()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.maps.fullscreen', compact('items', 'user'));
  }

  /**
   * Display a Vector Map View.
   *
   * @return \Illuminate\Http\Response
   */
  public function vector()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.maps.vector', compact('items', 'user'));
  }

  /****************** CHARTS & CALENDAR ******************/

  /**
   * Display a Charts View.
   *
   * @return \Illuminate\Http\Response
   */
  public function charts()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.charts', compact('items', 'user'));
  }

  /**
   * Display a Calendar View.
   *
   * @return \Illuminate\Http\Response
   */
  public function calendar()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.calendar', compact('items', 'user'));
  }

  /****************** PAGES ******************/

  /**
   * Display a Timeline View.
   *
   * @return \Illuminate\Http\Response
   */
  public function timeline()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.pages.timeline', compact('items', 'user'));
  }

  /**
   * Display a Profile View.
   *
   * @return \Illuminate\Http\Response
   */
  public function profile()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.pages.profile', compact('items', 'user'));
  }

  /**
   * Display a Login View.
   *
   * @return \Illuminate\Http\Response
   */
  public function login()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.pages.login', compact('items', 'user'));
  }

  /**
   * Display a Register View.
   *
   * @return \Illuminate\Http\Response
   */
  public function register()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.pages.register', compact('items', 'user'));
  }

  /**
   * Display a Lock View.
   *
   * @return \Illuminate\Http\Response
   */
  public function lock()
  {
    $sidebar = new MenuController();
    $user = $sidebar->paperUserData();
    $items = $sidebar->paperMenu();
    return view('paper.pages.lock', compact('items', 'user'));
  }

}