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