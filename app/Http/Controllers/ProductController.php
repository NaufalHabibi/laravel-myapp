<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    /**
     * Menampilkan daftar produk
     */
    public function index(): View
    {
        return view('products.index');
    }

    /**
     * Menampilkan form tambah produk
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * Menyimpan produk baru (sementara belum ke database)
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        // sementara redirect ke index
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Form edit produk
     */
    public function edit(): View
    {
        return view('products.edit');
    }

    /**
     * Mengupdate produk
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Menghapus produk
     */
    public function destroy()
    {
        //
    }
}
