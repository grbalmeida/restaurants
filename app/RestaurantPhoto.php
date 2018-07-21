<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantPhoto extends Model
{
    protected $table = 'restaurant_photos';

    public function restaurant() {
    	return $this->belongsTo(Restaurant::class);
    }

}
