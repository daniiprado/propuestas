<?php

namespace Propuesta\Http\Controllers;

class MaterialDashboardController extends Controller
{
  /**
   * Display a Dashboard View.
   *
   * @return \Illuminate\Http\Response
   */
  public function dashboard()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.dashboard', compact('items', 'user'));
  }

  /**
   * Display a Login View.
   *
   * @return \Illuminate\Http\Response
   */
  public function login()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.pages.login', compact('items', 'user'));
  }

  /**
   * Display a Register View.
   *
   * @return \Illuminate\Http\Response
   */
  public function register()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.pages.register', compact('items', 'user'));
  }

  /**
   * Display a Lock View.
   *
   * @return \Illuminate\Http\Response
   */
  public function lock()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.pages.lock', compact('items', 'user'));
  }

  /**
   * Display a Pricing View.
   *
   * @return \Illuminate\Http\Response
   */
  public function pricing()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.pages.pricing', compact('items', 'user'));
  }

  /**
   * Display a Profile View.
   *
   * @return \Illuminate\Http\Response
   */
  public function profile()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.pages.profile', compact('items', 'user'));
  }

  /**
   * Display a Data Tables View.
   *
   * @return \Illuminate\Http\Response
   */
  public function datatables()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.tables.datatable', compact('items', 'user'));
  }

  /**
   * Display a Regular Tables View.
   *
   * @return \Illuminate\Http\Response
   */
  public function regular()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.tables.regular', compact('items', 'user'));
  }

  /**
   * Display a Extended Tables View.
   *
   * @return \Illuminate\Http\Response
   */
  public function extended()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.tables.extended', compact('items', 'user'));
  }

  /**
   * Display a Typography View.
   *
   * @return \Illuminate\Http\Response
   */
  public function typography()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.components.typography', compact('items', 'user'));
  }

  /**
   * Display a Sweet Alert View.
   *
   * @return \Illuminate\Http\Response
   */
  public function sweetalert()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.components.sweet-alert', compact('items', 'user'));
  }

  /**
   * Display a Icons View.
   *
   * @return \Illuminate\Http\Response
   */
  public function icon()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.components.icons', compact('items', 'user'));
  }

  /**
   * Display a Buttons View.
   *
   * @return \Illuminate\Http\Response
   */
  public function button()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.components.buttons', compact('items', 'user'));
  }

  /**
   * Display a Grid View.
   *
   * @return \Illuminate\Http\Response
   */
  public function grid()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.components.grid', compact('items', 'user'));
  }

  /**
   * Display a Panel View.
   *
   * @return \Illuminate\Http\Response
   */
  public function panel()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.components.panel', compact('items', 'user'));
  }

  /**
   * Display a Maps View.
   *
   * @return \Illuminate\Http\Response
   */
  public function map()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.maps.google', compact('items', 'user'));
  }

  /**
   * Display a Fullscreen Map View.
   *
   * @return \Illuminate\Http\Response
   */
  public function fullscreen()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.maps.fullscreen', compact('items', 'user'));
  }

  /**
   * Display a Vector Map View.
   *
   * @return \Illuminate\Http\Response
   */
  public function vector()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.maps.vector', compact('items', 'user'));
  }

  /**
   * Display a Notifications View.
   *
   * @return \Illuminate\Http\Response
   */
  public function notification()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.components.notifications', compact('items', 'user'));
  }

  /**
   * Display a Calendar View.
   *
   * @return \Illuminate\Http\Response
   */
  public function calendar()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.calendar', compact('items', 'user'));
  }

  /**
   * Display a Timeline View.
   *
   * @return \Illuminate\Http\Response
   */
  public function timeline()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.pages.timeline', compact('items', 'user'));
  }

  /**
   * Display a widgets View.
   *
   * @return \Illuminate\Http\Response
   */
  public function widgets()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.widgets', compact('items', 'user'));
  }

  /**
   * Display a Charts View.
   *
   * @return \Illuminate\Http\Response
   */
  public function charts()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.charts', compact('items', 'user'));
  }

  /**
   * Display a Extended Form View.
   *
   * @return \Illuminate\Http\Response
   */
  public function extendedForm()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.forms.extended', compact('items', 'user'));
  }

  /**
   * Display a Regular Form View.
   *
   * @return \Illuminate\Http\Response
   */
  public function regularForm()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.forms.regular', compact('items', 'user'));
  }

  /**
   * Display a Wizard Form View.
   *
   * @return \Illuminate\Http\Response
   */
  public function wizardForm()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.forms.wizard', compact('items', 'user'));
  }

  /**
   * Display a Validation Form View.
   *
   * @return \Illuminate\Http\Response
   */
  public function validationForm()
  {
    $sidebar = new MenuController();
    $user = $sidebar->maerialUserData();
    $items = $sidebar->materialMenu();
    return view('material.forms.validation', compact('items', 'user'));
  }
}
