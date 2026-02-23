@extends('layouts.app')

@section('title', $categoryName)
@section('header', 'Produk — ' . $categoryName)

@section('content')
<div class="space-y-5">
    <!-- Tabs kategori -->
    <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100">
        <div class="flex flex-wrap gap-2">
            @foreach($categories as $slug => $label)
            <a href="/category/{{ $slug }}"
               class="px-4 py-2 rounded-xl text-sm font-medium transition
               {{ $sub === $slug
                    ? 'text-white'
                    : 'bg-gray-100 text-gray-600 hover:bg-blue-50 hover:text-blue-700' }}"
               @if($sub === $slug)
                   style="background-color: oklch(48.8% 0.243 264.376);"
               @endif
            >
                {{ $label }}
            </a>
            @endforeach
        </div>
    </div>

    <!-- Info Route -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="flex items-center gap-4 mb-4">
            <div class="w-12 h-12 rounded-xl flex items-center justify-center text-2xl"
                 style="background-color: oklch(90% 0.1 264);">
                @switch($sub)
                    @case('food-beverage') 🍔 @break
                    @case('beauty-health') 💄 @break
                    @case('home-care') 🏠 @break
                    @case('baby-kid') 👶 @break
                    @default 📦
                @endswitch
            </div>
            <div>
                <h2 class="text-xl font-bold text-gray-800">{{ $categoryName }}</h2>
                <p class="text-gray-500 text-sm">Menampilkan daftar produk kategori ini</p>
            </div>
        </div>

        <div class="bg-blue-50 rounded-xl p-4 border border-blue-100 mb-5">
            <p class="text-blue-800 font-medium text-sm">ℹ️ Informasi Route</p>
            <code class="text-blue-600 text-sm mt-1 block">GET /category/{{ $sub }} → ProductController@index</code>
        </div>

        <!-- Dummy produk grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
            @for($i = 1; $i <= 8; $i++)
            <div class="border border-gray-200 rounded-xl p-4 hover:border-blue-300 hover:shadow-sm transition group">
                <div class="w-full aspect-square rounded-lg bg-gray-100 flex items-center justify-center mb-3 text-3xl">
                    @switch($sub)
                        @case('food-beverage') 🍔 @break
                        @case('beauty-health') 💄 @break
                        @case('home-care') 🧹 @break
                        @case('baby-kid') 🍼 @break
                        @default 📦
                    @endswitch
                </div>
                <p class="text-sm font-semibold text-gray-700 truncate">Produk {{ $categoryName }} #{{ $i }}</p>
                <p class="text-xs text-gray-400 mt-0.5">Stok: {{ rand(10, 100) }}</p>
                <p class="text-sm font-bold mt-2" style="color: oklch(48.8% 0.243 264.376);">
                    Rp {{ number_format(rand(5000, 150000), 0, ',', '.') }}
                </p>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection
