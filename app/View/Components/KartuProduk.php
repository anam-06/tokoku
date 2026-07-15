<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class KartuProduk extends Component
{
    public $produk;

    public function __construct($produk)
    {
        $this->produk = $produk;
    }

    public function render(): View|Closure|string
    {
        return view('components.kartu-produk');
    }
}