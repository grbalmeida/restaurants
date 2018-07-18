<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MenuRequest;
use App\Http\Controllers\Controller;
use App\Menu;

class MenuController extends Controller
{
    public function index() {
    	$menus = Menu::all();
    	return view('admin.menus.index', compact('menus'));
    }

    public function new() {
    	return view('admin.menus.store');
    }

    public function store(MenuRequest $request) {
    	$menuData = $request->all();
        $request->validated();
    	$menu = new Menu();
    	$menu->create($menuData);
    	flash('Cardápio criado com sucesso')->success();
        return redirect()->route('menu.index');
    }

    public function edit(Menu $menu) {
    	return view('admin.menus.edit', compact('menu'));
    }

    public function update(MenuRequest $request, $id) {
    	$menuData = $request->all();
        $request->validated();
    	$menu = Menu::findOrFail($id);
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
