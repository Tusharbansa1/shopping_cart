<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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

    public function products()
    {
    	return view('layouts.products');
    }


    public function profile($name)
    {

        $user = User ::wherename($name)->first();
        return view('layouts.profile', compact('user'));
    }
}
