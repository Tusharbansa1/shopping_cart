<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userscontrol extends Controller
{
    public function checkout()
    {
        return view('layouts.checkout');
    }

    public function cart()
    {
        return view('layouts.cart');
    }
    
    public function contact()
    {
        return view('layouts.contact');
    }
}
