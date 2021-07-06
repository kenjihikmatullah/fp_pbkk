<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductSnapshot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $productIds = $request->productIds;
        $productQtys = $request->productQtys;

        $products = [];
        $totalWeight = 0;
        $productsPrice = 0;

        foreach ($productIds as $i => $id) {
            $product = Product::find($id);
            $product->quantity = $productQtys[$i];

            $products[] = $product;

            $totalWeight += $product->weight;
            $productsPrice += ($product->price * $product->quantity);
        };

        $shippingFee = ceil($totalWeight * 7000 / 1000);
        $total = $productsPrice + $shippingFee;

        return view('order.create', [
            'products' => $products,
            'totalWeight' => $totalWeight,
            'productsPrice' => $productsPrice,
            'shipping_fee' => $shippingFee,
            'total' => $total
        ]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        $productIds = $request->productIds;
        $productQtys = $request->productQtys;

        $products = [];
        $totalWeight = 0;
        $productsPrice = 0;

        foreach ($productIds as $i => $id) {
            $product = Product::find($id);
            $product->quantity = $productQtys[$i];

            $products[] = $product;

            $totalWeight += $product->weight;
            $productsPrice += ($product->price * $product->quantity);
        };

        $shippingFee = ceil($totalWeight * 7000 / 1000);

        $order = Order::create([
            'products_price' => $productsPrice,
            'shipping_fee' => $shippingFee,
            'payment_method' => 'transfer',
            'shipping_option' => 'internal',
            'receiver_name' => $request->receiverName,
            'receiver_address' => $request->receiverAddress,
            'receiver_phone' => $request->receiverPhone,
            'customer_id' => auth()->user()->id
        ]);

        $snapshots = [];
        foreach ($products as $product) {
            $snapshots[] = [
                'name' => $product->name,
                'price' => $product->price,
                'description' => $product->description,
                'weight' => $product->weight,
                'stock' => $product->stock,
                'quantity' => $product->quantity,
                'product_id' => $product->id,
                'order_id' => $order->id
            ];

            Product::find($product->id)->update(['stock' => $product->stock - $product->quantity]);
        }
        ProductSnapshot::insert($snapshots);

        DB::commit();

        return redirect()->route('home');
    }
}
