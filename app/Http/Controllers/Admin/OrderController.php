<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('admin.order.index', ['orders' => $orders]);
    }

    public function edit($id)
    {
        $order = Order::find($id)->load('productSnapshots');

        return view('admin.order.edit', ['order' => $order]);
    }

    public function update(Request $request, $id)
    {
        Order::find($id)->update([
            'receiver_name' => $request->receiver_name,
            'receiver_phone' => $request->receiver_phone,
            'receiver_address' => $request->receiver_address,
            'tracking_number' => $request->tracking_number,
            'status' => $request->status
        ]);

        return redirect()->route('admin.order');
    }
}
