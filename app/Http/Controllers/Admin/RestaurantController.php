<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RestaurantRequest;
use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index() {
    	$restaurants = Auth::user()->restaurants;
    	return view('admin.restaurants.index', compact('restaurants'));
    }

    public function new() {
    	return view('admin.restaurants.store');
    }

    public function store(RestaurantRequest $request) {
    	$restaurantData = $request->all();
        $request->validated();
        $user = Auth::user();
        $user->restaurants()->create($restaurantData);
    	flash('Restaurante criado com sucesso')->success();
        return redirect()->route('restaurant.index');
    }

    public function edit(Restaurant $restaurant) {
        if($restaurant->owner_id != Auth::user()->id) {
            return redirect()->route('restaurant.index');
        }
    	return view('admin.restaurants.edit', compact('restaurant'));
    }

    public function update(RestaurantRequest $request, $id) {
    	$restaurantData = $request->all();
        $request->validated();
    	$restaurant = Restaurant::findOrFail($id);
    	$restaurant->update($restaurantData);
        flash('Restaurante atualizado com sucesso')->success();
        return redirect()->route('restaurant.index');
    }

    public function delete($id) {
    	$restaurant = Restaurant::findOrFail($id);
    	$restaurant->delete();
        flash('Restaurante removido com sucesso')->success();
        return redirect()->route('restaurant.index');
    }
}
