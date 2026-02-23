@extends('layouts.app')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
<div class="space-y-6">

    <!-- Welcome Banner -->
    <div class="rounded-2xl p-6 text-white" style="background: linear-gradient(135deg, oklch(48.8% 0.243 264.376) 0%, oklch(38% 0.22 264) 100%);">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-xl font-bold">Selamat Datang, {{ auth()->user()->name }}! 👋</h3>
                <p class="text-blue-100 text-sm mt-1">{{ now()->locale('id')->isoFormat('dddd, D MMMM Y • HH:mm') }} WIB</p>
            </div>
            <div class="hidden sm:block">
                <svg class="w-20 h-20 text-blue-300 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

        <!-- Card: Total Penjualan -->
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background-color: oklch(90% 0.1 264);">
                    <svg class="w-6 h-6" style="color: oklch(48.8% 0.243 264.376);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <span class="text-xs text-green-600 bg-green-100 px-2 py-1 rounded-full font-medium">+12%</span>
            </div>
            <p class="text-2xl font-bold text-gray-800">Rp 4.250.000</p>
            <p class="text-sm text-gray-500 mt-1">Total Penjualan Hari Ini</p>
        </div>

        <!-- Card: Transaksi -->
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-orange-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </div>
                <span class="text-xs text-green-600 bg-green-100 px-2 py-1 rounded-full font-medium">+5%</span>
            </div>
            <p class="text-2xl font-bold text-gray-800">38</p>
            <p class="text-sm text-gray-500 mt-1">Total Transaksi</p>
        </div>

        <!-- Card: Produk -->
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <span class="text-xs text-blue-600 bg-blue-100 px-2 py-1 rounded-full font-medium">4 kategori</span>
            </div>
            <p class="text-2xl font-bold text-gray-800">124</p>
            <p class="text-sm text-gray-500 mt-1">Total Produk</p>
        </div>

        <!-- Card: Pengguna -->
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <span class="text-xs text-green-600 bg-green-100 px-2 py-1 rounded-full font-medium">Aktif</span>
            </div>
            <p class="text-2xl font-bold text-gray-800">2</p>
            <p class="text-sm text-gray-500 mt-1">Total Pengguna</p>
        </div>
    </div>

    <!-- Quick Access -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <h3 class="text-gray-800 font-semibold mb-4">Akses Cepat</h3>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
            @foreach([
                ['href' => '/home',                'icon' => '🏠', 'label' => 'Home'],
                ['href' => '/category/food-beverage', 'icon' => '🍔', 'label' => 'Food & Beverage'],
                ['href' => '/penjualan',            'icon' => '📊', 'label' => 'Penjualan'],
                ['href' => '/user/1/name/profil',   'icon' => '👤', 'label' => 'User Profil'],
            ] as $item)
            <a href="{{ $item['href'] }}"
               class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-gray-100 hover:border-blue-300 hover:bg-blue-50 transition group">
                <span class="text-2xl">{{ $item['icon'] }}</span>
                <span class="text-xs text-gray-600 group-hover:text-blue-600 font-medium text-center">{{ $item['label'] }}</span>
            </a>
            @endforeach
        </div>
    </div>

</div>
@endsection
