<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index(){
    $categories=Category::all();
    return view('admin.categories.index', compact('categories'));
   }

   public function store(CategoryStoreRequest $request){
    Category::create($request->all());
    return redirect()->route('category.index');
   }

   public function update(CategoryStoreRequest $request, Category $category){
    $category->update($request->all());
    return redirect()->route('category.index');
   }
   public function destroy(Category $category){
    $category->delete();
    return redirect()->route('category.index');
   }
}
