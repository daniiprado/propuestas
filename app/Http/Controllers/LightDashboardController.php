<?php

namespace Propuesta\Http\Controllers;


class LightDashboardController extends Controller
{
  /**
   * Display a Dashboard View.
   *
   * @return \Illuminate\Http\Response
   */
  public function dashboard()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.dashboard', compact('items', 'user'));
  }

  /**
   * Display a Login View.
   *
   * @return \Illuminate\Http\Response
   */
  public function login()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.pages.login', compact('items', 'user'));
  }

  /**
   * Display a Register View.
   *
   * @return \Illuminate\Http\Response
   */
  public function register()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.pages.register', compact('items', 'user'));
  }

  /**
   * Display a Lock View.
   *
   * @return \Illuminate\Http\Response
   */
  public function lock()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.pages.lock', compact('items', 'user'));
  }

  /**
   * Display a Pricing View.
   *
   * @return \Illuminate\Http\Response
   */
  public function pricing()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.pages.pricing', compact('items', 'user'));
  }

  /**
   * Display a Profile View.
   *
   * @return \Illuminate\Http\Response
   */
  public function profile()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.pages.profile', compact('items', 'user'));
  }

  /**
   * Display a Data Tables View.
   *
   * @return \Illuminate\Http\Response
   */
  public function datatables()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.tables.datatable', compact('items', 'user'));
  }

  /**
   * Display a Bootstrap Tables View.
   *
   * @return \Illuminate\Http\Response
   */
  public function bootstrap()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.tables.bootstrap', compact('items', 'user'));
  }

  /**
   * Display a Regular Tables View.
   *
   * @return \Illuminate\Http\Response
   */
  public function regular()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.tables.regular', compact('items', 'user'));
  }

  /**
   * Display a Extended Tables View.
   *
   * @return \Illuminate\Http\Response
   */
  public function extended()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.tables.extended', compact('items', 'user'));
  }

  /**
   * Display a Typography View.
   *
   * @return \Illuminate\Http\Response
   */
  public function typography()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.components.typography', compact('items', 'user'));
  }

  /**
   * Display a Sweet Alert View.
   *
   * @return \Illuminate\Http\Response
   */
  public function sweetalert()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.components.sweet-alert', compact('items', 'user'));
  }

  /**
   * Display a Icons View.
   *
   * @return \Illuminate\Http\Response
   */
  public function icon()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.components.icons', compact('items', 'user'));
  }

  /**
   * Display a Buttons View.
   *
   * @return \Illuminate\Http\Response
   */
  public function button()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.components.buttons', compact('items', 'user'));
  }

  /**
   * Display a Grid View.
   *
   * @return \Illuminate\Http\Response
   */
  public function grid()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.components.grid', compact('items', 'user'));
  }

  /**
   * Display a Panel View.
   *
   * @return \Illuminate\Http\Response
   */
  public function panel()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.components.panel', compact('items', 'user'));
  }

  /**
   * Display a Maps View.
   *
   * @return \Illuminate\Http\Response
   */
  public function map()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.maps.google', compact('items', 'user'));
  }

  /**
   * Display a Fullscreen Map View.
   *
   * @return \Illuminate\Http\Response
   */
  public function fullscreen()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.maps.fullscreen', compact('items', 'user'));
  }

  /**
   * Display a Vector Map View.
   *
   * @return \Illuminate\Http\Response
   */
  public function vector()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.maps.vector', compact('items', 'user'));
  }

  /**
   * Display a Notifications View.
   *
   * @return \Illuminate\Http\Response
   */
  public function notification()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.components.notifications', compact('items', 'user'));
  }

  /**
   * Display a Calendar View.
   *
   * @return \Illuminate\Http\Response
   */
  public function calendar()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.calendar', compact('items', 'user'));
  }

  /**
   * Display a Timeline View.
   *
   * @return \Illuminate\Http\Response
   */
  public function timeline()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.pages.timeline', compact('items', 'user'));
  }

  /**
   * Display a Charts View.
   *
   * @return \Illuminate\Http\Response
   */
  public function charts()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.charts', compact('items', 'user'));
  }

  /**
   * Display a Extended Form View.
   *
   * @return \Illuminate\Http\Response
   */
  public function extendedForm()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.forms.extended', compact('items', 'user'));
  }

  /**
   * Display a Regular Form View.
   *
   * @return \Illuminate\Http\Response
   */
  public function regularForm()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.forms.regular', compact('items', 'user'));
  }

  /**
   * Display a Wizard Form View.
   *
   * @return \Illuminate\Http\Response
   */
  public function wizardForm()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.forms.wizard', compact('items', 'user'));
  }

  /**
   * Display a Validation Form View.
   *
   * @return \Illuminate\Http\Response
   */
  public function validationForm()
  {
    $sidebar = new MenuController();
    $user = $sidebar->lightUserData();
    $items = $sidebar->lightMenu();
    return view('light.forms.validation', compact('items', 'user'));
  }
}