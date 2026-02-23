<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWL POS — Point of Sale System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root { --blue: oklch(48.8% 0.243 264.376); }
        .bg-primary { background-color: oklch(48.8% 0.243 264.376); }
        .text-primary { color: oklch(48.8% 0.243 264.376); }
        .border-primary { border-color: oklch(48.8% 0.243 264.376); }
        .hero-bg {
            background: linear-gradient(135deg, oklch(48.8% 0.243 264.376) 0%, oklch(35% 0.22 265) 100%);
        }
        .card-hover { transition: all .2s ease; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(0,0,0,.12); }
    </style>
</head>
<body class="bg-gray-50 font-sans">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-primary rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <span class="font-bold text-xl text-gray-800">PWL <span class="text-primary">POS</span></span>
            </div>
            <div class="hidden md:flex items-center gap-6 text-sm text-gray-600">
                <a href="/home" class="hover:text-primary transition">Home</a>
                <a href="/category/food-beverage" class="hover:text-primary transition">Produk</a>
                <a href="/user/1/name/profil" class="hover:text-primary transition">User</a>
                @auth
                    <a href="/penjualan" class="hover:text-primary transition">Penjualan</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button class="bg-primary text-white px-4 py-2 rounded-lg text-sm hover:opacity-90 transition">
                            Keluar
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="bg-primary text-white px-4 py-2 rounded-lg hover:opacity-90 transition">
                        Login
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg text-white py-24 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 bg-white bg-opacity-20 text-white text-sm px-4 py-2 rounded-full mb-6">
                🛒 Point of Sale System
            </div>
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-5">
                Kelola Toko Anda<br>dengan Mudah & Cepat
            </h1>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                PWL POS membantu Anda mengelola produk, transaksi, dan laporan penjualan dalam satu platform yang simpel dan modern.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="/home"
                   class="bg-white text-primary font-semibold px-6 py-3 rounded-xl hover:shadow-lg transition">
                    Mulai Sekarang →
                </a>
                @guest
                <a href="{{ route('login') }}"
                   class="border-2 border-white text-white px-6 py-3 rounded-xl hover:bg-white hover:text-primary transition font-semibold">
                    Login
                </a>
                @endguest
            </div>
        </div>
    </section>

    <!-- Menu Cards -->
    <section class="py-16 px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-2">Fitur Utama</h2>
            <p class="text-gray-500 text-center text-sm mb-10">Akses semua fitur yang kamu butuhkan</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Home -->
                <a href="/home" class="card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100 block">
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-2xl">🏠</span>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-1">Home</h3>
                    <p class="text-gray-500 text-sm">Halaman awal website</p>
                    <p class="text-xs text-primary mt-3 font-mono">GET /home</p>
                </a>

                <!-- Products -->
                <a href="/category/food-beverage" class="card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100 block">
                    <div class="w-12 h-12 bg-orange-50 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-2xl">📦</span>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-1">Products</h3>
                    <p class="text-gray-500 text-sm">Daftar produk per kategori</p>
                    <p class="text-xs text-primary mt-3 font-mono">/category/{sub}</p>
                </a>

                <!-- User -->
                <a href="/user/1/name/profil" class="card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100 block">
                    <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-2xl">👤</span>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-1">User</h3>
                    <p class="text-gray-500 text-sm">Profil pengguna</p>
                    <p class="text-xs text-primary mt-3 font-mono">/user/{id}/name/{name}</p>
                </a>

                <!-- Penjualan -->
                @auth
                <a href="/penjualan" class="card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100 block">
                @else
                <a href="{{ route('login') }}" class="card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100 block relative overflow-hidden">
                    <div class="absolute top-3 right-3">
                        <span class="bg-yellow-100 text-yellow-700 text-xs px-2 py-0.5 rounded-full font-medium">🔒 Login</span>
                    </div>
                @endauth
                    <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-2xl">📊</span>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-1">Penjualan</h3>
                    <p class="text-gray-500 text-sm">Transaksi POS</p>
                    <p class="text-xs text-primary mt-3 font-mono">GET /penjualan</p>
                </a>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-100 py-6 text-center text-sm text-gray-400">
        &copy; {{ date('Y') }} PWL POS
    </footer>

</body>
</html>
