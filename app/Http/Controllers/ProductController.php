<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
  public function index()
{
    $products = Product::latest()->paginate(5);
    return view('products.index', compact('products'));
}
public function create()
{
    return view('products.create');
}

public function edit(Product $product)
{
    // Kembalikan view 'edit' dengan data produk yang akan diubah
    return view('products.edit', compact('product'));
}

public function update(Request $request, Product $product)
{
    // Validasi input form
    $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'description' => 'required',
    ]);

    // Update data produk
    $product->update($request->all());

    // Arahkan kembali ke halaman index dengan pesan sukses
    return redirect()->route('products.index')
                     ->with('success', 'Produk berhasil diperbarui.');
}

public function destroy(Product $product)
{
    // Hapus produk
    $product->delete();

    // Arahkan kembali ke halaman index dengan pesan sukses
    return redirect()->route('products.index')
                     ->with('success', 'Produk berhasil dihapus.');
}
public function store(Request $request)
{
    // Validasi input form
    $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'description' => 'required',
    ]);

    // Buat produk baru menggunakan data dari request
    Product::create($request->all());

    // Arahkan kembali ke halaman index dengan pesan sukses
    return redirect()->route('products.index')
                     ->with('success', 'Produk berhasil ditambahkan.');
}

    
}   