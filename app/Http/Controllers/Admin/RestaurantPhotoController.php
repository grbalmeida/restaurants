<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantPhotoController extends Controller
{
    
	public function index($id) {
		$restaurant_id = $id;
		return view('admin.restaurants.photos.index', compact('restaurant_id'));
	}

	public function save(Request $request, $id) {
		dd($request->file('photos'));
	}

}
