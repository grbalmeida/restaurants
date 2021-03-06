<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::paginate(10);
        return view('home', compact('restaurants'));
    }

    public function get(Restaurant $id) {
        return view('single', compact('id'));      
    }

}
