<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function show($slug)
    {
        return view('kategori.show', ['slug' => $slug]);
    }
}
