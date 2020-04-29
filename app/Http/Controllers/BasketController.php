<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class BasketController extends Controller {
    public function basket($product = null) {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }

        return view('basket', compact('order'));
    }

    public function basketPlace($product = null) {
        return view('order');
    }

    public function basketAdd($productId) {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['order_id' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        $order->products()->attach($productId);

        return view('basket', compact('order'));
    }
}
