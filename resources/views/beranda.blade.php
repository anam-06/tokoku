@extends('layouts.app')

@section('judul', 'Beranda')

@section('konten')
    <h1>Selamat Datang di Toko ABC</h1>
    <p>Produk unggulan kami.</p>

    <div class="row">
        @foreach($produkUnggulan as $produk)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $produk['nama'] }}</h5>
                        <p>
                            Rp {{ number_format($produk['harga'], 0, ',', '.') }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection