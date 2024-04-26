<?php

namespace App\Http\Controllers\SupportAgent;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('supportAgent.product.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
        $product = new Product($request->validated());
        $product->save();
        if ($request->hasFile('image')) {
            $product->addMediaFromRequest('image')->toMediaCollection('product');
        }
        return redirect()->route('supportAgentProduct.index')->with('success', 'Product added successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductStoreRequest $request, $id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->update($request->validated());

            if ($request->hasFile('image')) {
                $product->clearMediaCollection('product');
                $product->addMediaFromRequest('image')->toMediaCollection('product');
            }

            return redirect()->route('supportAgentProduct.index')->with('success', 'Product updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error updating Product: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();

            return redirect()->route('supportAgentProduct.index')->with('success', 'Product deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error deleting Product: ' . $e->getMessage());
        }
    }
}
