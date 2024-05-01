<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel carts
        $carts = Cart::all();

        // Kirim data ke tampilan cart
        return view('cart', compact('carts'));
    }

    public function create()
    {
        // Tampilkan form untuk membuat data baru
        return view('create-cart');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name_product' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
            'total' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Buat data baru berdasarkan data yang divalidasi
        Cart::create($validatedData);

        // Redirect ke halaman index cart dengan pesan sukses
        return redirect()->route('carts.index')->with('success', 'Cart created successfully.');
    }

    public function edit($id)
    {
        // Temukan data berdasarkan ID yang diberikan
        $cart = Cart::findOrFail($id);

        // Tampilkan form untuk mengedit data
        return view('edit-cart', compact('cart'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name_product' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
            'total' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Temukan data berdasarkan ID yang diberikan
        $cart = Cart::findOrFail($id);

        // Update data berdasarkan data yang divalidasi
        $cart->update($validatedData);

        // Redirect ke halaman index cart dengan pesan sukses
        return redirect()->route('carts.index')->with('success', 'Cart updated successfully.');
    }

    public function destroy($id)
    {
        // Temukan data berdasarkan ID yang diberikan
        $cart = Cart::findOrFail($id);
    }
}
