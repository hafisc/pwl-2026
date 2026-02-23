@extends('layouts.app')

@section('title', 'Penjualan')
@section('header', 'Penjualan')

@section('content')
<div class="space-y-5">

    <!-- Info Route -->
    <div class="bg-blue-50 rounded-xl p-4 border border-blue-100">
        <p class="text-blue-800 font-medium text-sm">ℹ️ Informasi Route</p>
        <code class="text-blue-600 text-sm mt-1 block">GET /penjualan → PenjualanController@index</code>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 text-center">
            <p class="text-3xl font-bold" style="color: oklch(48.8% 0.243 264.376);">Rp 4.250.000</p>
            <p class="text-gray-500 text-sm mt-1">Total Hari Ini</p>
        </div>
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 text-center">
            <p class="text-3xl font-bold text-orange-500">38</p>
            <p class="text-gray-500 text-sm mt-1">Transaksi</p>
        </div>
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 text-center">
            <p class="text-3xl font-bold text-green-500">Rp 111.842</p>
            <p class="text-gray-500 text-sm mt-1">Rata-rata / Transaksi</p>
        </div>
    </div>

    <!-- Tabel Transaksi -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
            <h3 class="font-semibold text-gray-800">Riwayat Transaksi</h3>
            <span class="text-xs text-gray-400">Hari ini</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-gray-500 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3 text-left">No</th>
                        <th class="px-6 py-3 text-left">ID Transaksi</th>
                        <th class="px-6 py-3 text-left">Produk</th>
                        <th class="px-6 py-3 text-right">Total</th>
                        <th class="px-6 py-3 text-center">Status</th>
                        <th class="px-6 py-3 text-left">Waktu</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @php
                        $produk = ['Indomie Goreng','Shampo Pantene','Sabun Lifebuoy','Pampers Bayi','Teh Botol Sosro'];
                        $jam = ['08:12','09:35','10:20','11:05','12:30','13:45','14:00'];
                    @endphp
                    @for($i = 1; $i <= 7; $i++)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-3 text-gray-400">{{ $i }}</td>
                        <td class="px-6 py-3 font-mono text-gray-600 text-xs">TRX-{{ str_pad($i, 5, '0', STR_PAD_LEFT) }}</td>
                        <td class="px-6 py-3 text-gray-700">{{ $produk[array_rand($produk)] }}</td>
                        <td class="px-6 py-3 text-right font-semibold text-gray-800">
                            Rp {{ number_format(rand(10000, 200000), 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-3 text-center">
                            <span class="px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">Lunas</span>
                        </td>
                        <td class="px-6 py-3 text-gray-400 text-xs">{{ $jam[array_rand($jam)] }}</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
