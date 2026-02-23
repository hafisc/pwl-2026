@extends('layouts.app')

@section('title', 'Home')
@section('header', 'Home')

@section('content')
<div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
    <div class="flex items-center gap-4 mb-6">
        <div class="w-14 h-14 rounded-2xl flex items-center justify-center"
             style="background-color: oklch(90% 0.1 264);">
            <svg class="w-8 h-8" style="color: oklch(48.8% 0.243 264.376);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h7"/>
            </svg>
        </div>
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Halaman Home</h1>
            <p class="text-gray-500 text-sm">Menampilkan halaman awal website</p>
        </div>
    </div>

    <div class="bg-blue-50 rounded-xl p-5 border border-blue-100">
        <p class="text-blue-800 font-medium text-sm">ℹ️ Informasi Route</p>
        <code class="text-blue-600 text-sm mt-1 block">GET /home → HomeController@index</code>
    </div>

    <p class="mt-6 text-gray-600 leading-relaxed">
        Selamat datang di <strong>PWL POS</strong> — sistem Point of Sale sederhana untuk manajemen penjualan,
        produk, dan pengguna. Gunakan sidebar untuk navigasi ke halaman lainnya.
    </p>
</div>
@endsection
