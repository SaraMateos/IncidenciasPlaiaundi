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
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //Muestra el home de un usuario NORMAL
    public function inicio() {
        return view('home');
    }

    //Muestra el home de un usuario ADMIN
    public function iniAdmin() {
        return view('admin.homeAdmin');
    }

}