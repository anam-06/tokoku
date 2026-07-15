<div class="card mb-3">
    <div class="card-body">

        <h4 class="card-title">
            {{ $produk['nama'] }}
        </h4>

        <p>
            <strong>Kategori:</strong>
            {{ $produk['kategori'] }}
        </p>

        <p>
            <strong>Harga:</strong>
            Rp {{ number_format($produk['harga'], 0, ',', '.') }}
        </p>

        <p>
            <strong>Status Stok:</strong>

            @if($produk['stok'] > 0)

                <span class="badge bg-success">
                    Tersedia
                </span>

            @else

                <span class="badge bg-danger">
                    Stok Habis
                </span>

            @endif
        </p>


        @if($produk['stok'] > 0)

            <a href="/produk/{{ $produk['id'] }}"
               class="btn btn-primary">
                Lihat Detail
            </a>

        @else

            <button class="btn btn-secondary" disabled>
                Lihat Detail
            </button>

        @endif

    </div>
</div>