<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function history()
    {
        $orders = Order::with('orderProducts.product')
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('user.riwayat', compact('orders'));
    }
}
