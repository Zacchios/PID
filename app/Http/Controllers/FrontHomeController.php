<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    public function index()
    {
        $products = \App\Product::with('marque')->get();

        if ($products != null)
            return view('Front.welcome',compact('products'));

    }
}
