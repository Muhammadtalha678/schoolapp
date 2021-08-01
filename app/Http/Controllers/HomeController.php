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
        return view('welcome');
    }
     public function dashboard()
    {
        return view('dashboard');
    }
     public function dashboard2()
    {
        return view('dashboard2');
    }
     public function dashboard3()
    {
        return view('dashboard3');
    }
}
