@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <p class="muted">Menampilkan daftar produk berdasarkan kategori route prefix <code>/category/{category}</code>.</p>

    <div style="margin: 14px 0;">
        <a class="chip" href="{{ route('products.category', 'food-beverage') }}">food-beverage</a>
        <a class="chip" href="{{ route('products.category', 'beauty-health') }}">beauty-health</a>
        <a class="chip" href="{{ route('products.category', 'home-care') }}">home-care</a>
        <a class="chip" href="{{ route('products.category', 'baby-kid') }}">baby-kid</a>
    </div>

    <div class="card">
        <p>Kategori aktif:</p>
        <h3 style="margin-top:0;color:#ddd6fe;">{{ $category }}</h3>
    </div>
@endsection
