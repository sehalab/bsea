<?php

namespace App\Http\Controllers;

use App\Foyer;

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
        $foyers = Foyer::all();
        return view('foyer')->withFoyers($foyers);

    }
    public function enqStart()
    {
        return view('home');
    }
}
