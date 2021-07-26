<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userview()
    {
            return view ('user.user');
    }
}
