<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function index_rt()
    {
        return view('pages.dash.rt');
    }

    public function index_rw()
    {
        return view('pages.dash.rw');
    }

    public function index_admin()
    {
        return view('pages.dash.admin');
    }
}
