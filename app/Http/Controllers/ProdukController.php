<?php

namespace App\Http\Controllers;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = [
            [
                'id' => 1,
                'nama' => 'Laptop Asus',
                'kategori' => 'Elektronik',
                'harga' => 8750000,
                'stok' => 5
            ],
            [
                'id' => 2,
                'nama' => 'Mouse Logitech',
                'kategori' => 'Aksesoris',
                'harga' => 250000,
                'stok' => 0
            ],
            [
                'id' => 3,
                'nama' => 'Keyboard Mechanical',
                'kategori' => 'Aksesoris',
                'harga' => 750000,
                'stok' => 10
            ]
        ];

        return view('produk.index', compact('produks'));
    }
}