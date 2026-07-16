@extends ('layouts.app')
@section ('judul', 'Produk')

@section('konten')
<h1>{{ $produk['nama'] }}</h1>

<p>
    Rp {{ number_format($produk['harga'], 0, ',', '.') }}
</p>

<p>{{ $produk['deskripsi'] }}</p>
@endsection