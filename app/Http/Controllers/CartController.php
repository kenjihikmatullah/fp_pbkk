<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $productCarts = ProductCart::where('customer_id', auth()->user()->id)->get()->load('product');
        $products = [];

        foreach ($productCarts as $pc) {
            $product = $pc->product;
            $product->quantity = $pc->quantity;

            $products[] = $product;
        }

        return view('cart.index', ['products' => $products]);
    }

    public function store(Request $request)
    {
        $userId = auth()->user()->id;

        $productIds = $request->productIds;
        $productQtys = $request->productQtys;

        $productCarts = [];
        foreach ($productIds as $i => $id) {
            $productCarts[] = [
                'quantity' => $productQtys[$i],
                'product_id' => $id,
                'customer_id' => $userId
            ];
        }

        DB::beginTransaction();
        
        ProductCart::insert($productCarts);

        DB::commit();
        
        return redirect()->route('cart');
    }
}
