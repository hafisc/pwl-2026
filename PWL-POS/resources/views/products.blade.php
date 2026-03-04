@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <p class="muted">Data produk asli diambil dari database berdasarkan kategori route <code>/category/{category}</code>.</p>

    <div style="margin: 14px 0;">
        <a class="chip" href="{{ route('products.category', 'food-beverage') }}">food-beverage</a>
        <a class="chip" href="{{ route('products.category', 'beauty-health') }}">beauty-health</a>
        <a class="chip" href="{{ route('products.category', 'home-care') }}">home-care</a>
        <a class="chip" href="{{ route('products.category', 'baby-kid') }}">baby-kid</a>
    </div>

    <div class="card" style="margin-bottom: 14px;">
        <p>Kategori aktif:</p>
        <h3 style="margin-top:0;color:#ddd6fe;">{{ $category }}</h3>
    </div>

    <div class="card">
        <h3 style="margin-top:0;color:#ddd6fe;">Daftar Produk</h3>

        @if($products->isEmpty())
            <p class="muted">Belum ada data produk pada kategori ini.</p>
        @else
            <div style="overflow-x:auto;">
                <table style="width:100%; border-collapse: collapse;">
                    <thead>
                        <tr style="text-align:left; border-bottom:1px solid rgba(255,255,255,.15);">
                            <th style="padding:8px;">Kode</th>
                            <th style="padding:8px;">Nama Barang</th>
                            <th style="padding:8px;">Kategori</th>
                            <th style="padding:8px;">Harga Beli</th>
                            <th style="padding:8px;">Harga Jual</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $item)
                            <tr style="border-bottom:1px solid rgba(255,255,255,.08);">
                                <td style="padding:8px;">{{ $item->barang_kode }}</td>
                                <td style="padding:8px;">{{ $item->barang_nama }}</td>
                                <td style="padding:8px;">{{ $item->kategori->kategori_nama ?? '-' }}</td>
                                <td style="padding:8px;">Rp {{ number_format($item->harga_beli, 0, ',', '.') }}</td>
                                <td style="padding:8px; color:#86efac;">Rp {{ number_format($item->harga_jual, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
