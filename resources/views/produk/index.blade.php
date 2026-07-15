@extends('layouts.app')

@section('judul', 'Produk')

@section('konten')

<h1>Daftar Produk</h1>

@foreach($produk as $item)

<div>
    <h3>{{ $item['nama'] }}</h3>

    <p>
        Rp {{ number_format($item['harga'], 0, ',', '.') }}
    </p>

    @if($item['stok'] == 0)

        <p style="color:red;">
            Stok Habis
        </p>

        <button disabled style="background:#ccc; color:#666;">
            Detail
        </button>

    @else

        <p style="color:green;">
            Stok tersedia: {{ $item['stok'] }}
        </p>

        <a href="{{ url('/produk/' . $item['id']) }}"
           style="background:blue; color:white; padding:5px 10px;">
            Detail
        </a>

    @endif

</div>

<hr>

@endforeach

@endsection