@extends('layouts.app')

@section('judul', 'Daftar Produk')

@section('konten')

<h2>Daftar Produk</h2>

@foreach($produks as $p)

    <x-kartu-produk :produk="$p" />

@endforeach

@endsection