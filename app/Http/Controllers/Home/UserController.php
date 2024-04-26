<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $pets=Pet::latest()->take(3)->get();
        $products=Product::latest()->take(3)->get();
        return view('welcome', compact('products','pets'));
    }

}
