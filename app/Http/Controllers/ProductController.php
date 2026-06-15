<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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
    

