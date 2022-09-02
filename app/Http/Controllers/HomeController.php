<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Return index view
     *
     * @return string
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Return home view
     *
     * @return string
     */
    public function home()
    {
        return redirect()->route('home.index');
    }

    /**
     * Return sumatory
     *
     * @return int
     */
    public function sum(int $num11, int $num22)
    {
        return $num11+$num22;
    }
}
