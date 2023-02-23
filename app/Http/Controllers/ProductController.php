<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('company')->get();
        return view('product', ['products' => $products,]);
        // dd($products);
    }
}
