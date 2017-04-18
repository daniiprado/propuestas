<?php

namespace Propuesta\Http\Controllers;


class PaperDashboardController extends Controller
{
    /**
     * Display a Dashboard View.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $sidebar = new MenuController();
        $user = $sidebar->paperUserData();
        $items = $sidebar->paperMenu();
        return view('paper.dashboard', compact('items', 'user'));
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
        return view('paper.profile', compact('items', 'user'));
    }

    /**
     * Display a Tables View.
     *
     * @return \Illuminate\Http\Response
     */
    public function table()
    {
        $sidebar = new MenuController();
        $user = $sidebar->paperUserData();
        $items = $sidebar->paperMenu();
        return view('paper.tables', compact('items', 'user'));
    }

    /**
     * Display a Typography View.
     *
     * @return \Illuminate\Http\Response
     */
    public function typography()
    {
        $sidebar = new MenuController();
        $user = $sidebar->paperUserData();
        $items = $sidebar->paperMenu();
        return view('paper.typography', compact('items', 'user'));
    }

    /**
     * Display a Icon View.
     *
     * @return \Illuminate\Http\Response
     */
    public function icon()
    {
        $sidebar = new MenuController();
        $user = $sidebar->paperUserData();
        $items = $sidebar->paperMenu();
        return view('paper.icons', compact('items', 'user'));
    }

    /**
     * Display a Buttons View.
     *
     * @return \Illuminate\Http\Response
     */
    public function button()
    {
        $sidebar = new MenuController();
        $user = $sidebar->paperUserData();
        $items = $sidebar->paperMenu();
        return view('paper.buttons', compact('items', 'user'));
    }

    /**
     * Display a Regular View.
     *
     * @return \Illuminate\Http\Response
     */
    public function regular()
    {
        $sidebar = new MenuController();
        $user = $sidebar->paperUserData();
        $items = $sidebar->paperMenu();
        return view('paper.forms.regular', compact('items', 'user'));
    }

    /**
     * Display a Extended View.
     *
     * @return \Illuminate\Http\Response
     */
    public function extended()
    {
        $sidebar = new MenuController();
        $user = $sidebar->paperUserData();
        $items = $sidebar->paperMenu();
        return view('paper.forms.extended', compact('items', 'user'));
    }

    /**
     * Display a Validation View.
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

    /**
     * Display a Wizard View.
     *
     * @return \Illuminate\Http\Response
     */
    public function wizard()
    {
        $sidebar = new MenuController();
        $user = $sidebar->paperUserData();
        $items = $sidebar->paperMenu();
        return view('paper.forms.wizard', compact('items', 'user'));
    }

    /**
     * Display a Map View.
     *
     * @return \Illuminate\Http\Response
     */
    public function map()
    {
        $sidebar = new MenuController();
        $user = $sidebar->paperUserData();
        $items = $sidebar->paperMenu();
        return view('paper.maps', compact('items', 'user'));
    }

    /**
     * Display a Notifications View.
     *
     * @return \Illuminate\Http\Response
     */
    public function notification()
    {
        $sidebar = new MenuController();
        $user = $sidebar->paperUserData();
        $items = $sidebar->paperMenu();
        return view('paper.notifications', compact('items', 'user'));
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
     * Display a Login View.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        $image = asset('paper/assets/img/background/background-2.jpg');
        return view('paper.login', compact('image'));
    }

    /**
     * Display a Register View.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        $image = '';
        return view('paper.register', compact('image'));
    }

    /**
     * Display a Lock Screen View.
     *
     * @return \Illuminate\Http\Response
     */
    public function lock()
    {
        $sidebar = new MenuController();
        $user = $sidebar->paperUserData();
        $image = asset('paper/assets/img/background/background-5.png');
        return view('paper.lock', compact('user', 'image'));
    }
}
