<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MenuRequest;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Restaurant;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index() {
    	$restaurants = Auth::user()->restaurants()->select('id')->get()->toArray();
        $menus = Menu::whereIn('restaurant_id', $restaurants)->get();
    	return view('admin.menus.index', compact('menus'));
    }

    public function new() {
        $restaurants = Auth::user()->restaurants;
    	return view('admin.menus.store', compact('restaurants'));
    }

    public function store(MenuRequest $request) {
    	$menuData = $request->all();
        $request->validated();
    	$restaurant = Restaurant::find($menuData['restaurant_id']);
        $restaurant->menus()->create($menuData);
    	flash('Cardápio criado com sucesso')->success();
        return redirect()->route('menu.index');
    }

    public function edit(Menu $menu) {
        $restaurantId = Menu::where('id', $menu->id)->get()[0]->restaurant_id;
        $ownerId = Restaurant::where('id', $restaurantId)->get()[0]->owner_id;
        if($ownerId != Auth::user()->id) {
            return redirect()->route('menu.index');
        }
        $restaurants = Auth::user()->restaurants;
    	return view('admin.menus.edit', compact('menu', 'restaurants'));
    }

    public function update(MenuRequest $request, $id) {
    	$menuData = $request->all();
        $request->validated();
    	$menu = Menu::find($id);
        $menu->restaurant()->associate($menuData['restaurant_id']);
        $menu->update($menuData);
    	flash('Cardápio atualizado com sucesso')->success();
        return redirect()->route('menu.edit', ['id' => $id]);
    }

    public function delete($id) {
    	$menu = Menu::findOrFail($id);
    	$menu->delete();
        flash('Cardápio removido com sucesso')->success();
    	return redirect()->route('menu.index');
    }
}
