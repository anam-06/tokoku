@extends('layouts.app')

@section('judul', 'Daftar Produk')

@section('konten')


<h1>Daftar Produk</h1>

@foreach ($produk as $p)
    <x-kartu-produk :produk="$p" />
@endforeach

@endsection