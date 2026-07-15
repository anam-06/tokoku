<div class="card">
    <h3>{{ $produk['nama'] }}</h3>

    <p>Kategori: {{ $produk['kategori'] }}</p>

    <p>
        Harga:
        Rp {{ number_format($produk['harga'], 0, ',', '.') }}
    </p>

    <p>
        Status Stok:
        {{ $produk['stok'] > 0 ? 'Tersedia' : 'Habis' }}
    </p>

    <a href="{{ route('produk.show', $produk['id']) }}">
        <button>Lihat Detail</button>
    </a>
</div>