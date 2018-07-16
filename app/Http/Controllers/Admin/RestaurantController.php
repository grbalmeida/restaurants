<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function index() {
    	return Restaurant::all();
    }

    public function new() {
    	return view('admin.restaurants.store');
    }

    public function store(Request $request) {
    	$restaurantData = $request->all();
    	$restaurant = new Restaurant();
    	$restaurant->create($restaurantData);
    	print 'Restaurante criado com sucesso';
    }
}
