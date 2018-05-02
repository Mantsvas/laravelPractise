<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
      $products = Product::all();
      return view('product.products', compact('products'));
    }
    public function main()
    {
      $products = Product::all()->take(3);
      return view('welcome', compact('products'));
    }
    public function show($id)
    {
      $product = Product::find($id);
      return view('product.product', compact('product'));
    }
}
