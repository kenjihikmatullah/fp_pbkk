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

    }
}
