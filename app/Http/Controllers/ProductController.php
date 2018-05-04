<?php

namespace App\Http\Controllers;

use App\Product;
use App\Company;
use App\Category;
use App\Http\Requests\StoreProductRequest;
// use Illuminate\Http\Request;

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
    public function show(Product $product)
    {
      return view('product.product', compact('product'));
    }

    public function create()
    {

      $this->authorize('create',Product::class);
      $companies= Company::all();
      $categories= Category::all();

      return view('product.createProduct',compact('companies','categories'));
    }
    public function store(StoreProductRequest $request)
    {
      $this->authorize('create',Product::class);
      Product::create([
        'name' =>$request->input('name'),
        'description'=>$request->input('description'),
        'price'=>$request->input('price'),
        'quantity'=>$request->input('quantity'),
        'category_id'=>$request->input('category_id'),
        'manufacturer_id'=>$request->input('manufacturer_id')
      ]);
      return redirect()->route('products.page')->with('success','Productas Issaugotas');
    }

    public function delete(Product $product)
    {
      $this->authorize('delete',Product::class);
      $product->delete();
      return redirect()->route('products.page')->with('success','Productas Istrintas');
    }
    public function edit(Product $product)
    {
      $this->authorize('update',Product::class);
      $companies= Company::all();
      $categories= Category::all();

      return view('product.createProduct',compact('product','companies','categories'));

    }
    public function update(Product $product,StoreProductRequest $update)
    {
      $this->authorize('update',Product::class);
      $product->update([
        'name' =>$update->input('name'),
        'description'=>$update->input('description'),
        'price'=>$update->input('price'),
        'quantity'=>$update->input('quantity'),
        'category_id'=>$update->input('category_id'),
        'manufacturer_id'=>$update->input('manufacturer_id')
      ]);

      return redirect()->route('product.page',$product->id)->with('success','Productas Atnaujintas');
    }

}
