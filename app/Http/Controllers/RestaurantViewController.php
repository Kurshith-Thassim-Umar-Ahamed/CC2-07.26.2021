<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantViewController extends Controller
{
    public function restaurantview()
    {
        return view('restaurant.restaurantView');
    }
}
