<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'weight' => $request->weight,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return redirect()->route('admin.product');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.product.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        Product::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'weight' => $request->weight,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return redirect()->route('admin.product');
    }

    public function delete($id)
    {
    }
}
