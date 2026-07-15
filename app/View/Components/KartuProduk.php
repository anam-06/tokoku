<?php

namespace App\View\Components;

use Illuminate\View\Component;

class KartuProduk extends Component
{
    public $produk;

    public function __construct($produk)
    {
        $this->produk = $produk;
    }

    public function render()
    {
        return view('components.kartu-produk');
    }
}