<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::latest()->take(8)->get();
        return view('marketplace.index', compact('products'));
    }
    public function show($id){
        $product=Product::find($id);
        return view('marketplace.show', compact('product'));
    }
}
