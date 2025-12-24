<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function add(Product $product)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'nama' => $product->nama,
                'harga' => $product->harga,
                'quantity' => 1,
                'foto' => $product->foto,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back();
    }
}
