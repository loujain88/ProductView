<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*
    public function index()
    {
        $Products = Product::query()->get();
        return view('Products.index', compact('Products'));
    }
    public function create()
    {
        return view('Products.create');
    }
    public function store(StoreProductRequest $request)
    {
        $product = Product::query()->create($request->validated());
           return redirect()->route('Products.index');
    }}
    /*/
    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());

        return response()->json($product);
    }
    public function show($id)
{
    $product = Product::with('category')->find($id);

    return response()->json($product);
}

}