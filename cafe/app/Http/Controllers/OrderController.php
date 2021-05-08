<?php

namespace App\Http\Controllers;

use App\Item;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function orderAdd($itemId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        $order->items()->attach($itemId);

        return view('addFood', compact('order'));
    }
}
