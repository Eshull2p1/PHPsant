<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }
    public function show()
    {
        return response()->json(['message' => 'show']);
    }
    public function update()
    {
        return response()->json(['message' => 'update']);
    }
    public function destroy()
    {
        return response()->json(['message' => 'destroy']);
    }
    public function store()
    {
        return response()->json(['message' => 'store']);
    }
}
