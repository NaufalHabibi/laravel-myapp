<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('user.checkout', compact('cart'));
    }

    public function process(Request $request)
    {
        $cart = session()->get('cart', []);

        // HITUNG TOTAL OTOMATIS
        $total = collect($cart)->sum(function ($item) {
            return $item['harga'] * $item['quantity'];
        });

        // SIMPAN ORDER
        $order = Order::create([
            'tanggal' => now(),
            'total' => $total,
            'status_pembayaran' => 'pending',
            'user_id' => auth()->id(),
        ]);

        // SIMPAN DETAIL ORDER
        foreach ($cart as $productId => $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'jumlah' => $item['quantity'],
                'harga_satuan' => $item['harga'],
            ]);

            // KURANGI STOK
            $product = Product::find($productId);
            $product->stok -= $item['quantity'];
            $product->save();
        }

        session()->forget('cart');

        return redirect()->route('checkout.sukses');
    }

    public function sukses()
    {
        return view('user.sukses');
    }
}
