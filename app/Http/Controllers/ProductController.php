<?php

namespace App\Http\Controllers;

use App\Models\biaya;
use App\Models\product;
use LaravelDaily\LaravelCharts;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('product', ['products' => $products]);
    }

    public function create()
    {
        return view('create-product');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name_product' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'stock' => 'required|integer',
            'date' => 'required|date',
        ]);


        // Buat produk baru berdasarkan data yang validasi
        product::create($validatedData);

        // Redirect ke halaman index produk dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('edit-product', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name_product' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'stock' => 'required|integer',
            'date' => 'required|date',
        ]);

        $product = product::findOrFail($id);

        // Update produk berdasarkan data yang divalidasi
        $product->update($validatedData);

        // Redirect ke halaman index produk dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function delete($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        // Redirect ke halaman index produk dengan pesan sukses
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }

}
