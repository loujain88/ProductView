<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(StoreCategoryRequest $request)
    {
        $category = Category::query()->create($request->validated());
        return response()->json($category);
    }
    public function show($id)
{
    $category = Category::with('products')->find($id);

    return response()->json($category);
}
