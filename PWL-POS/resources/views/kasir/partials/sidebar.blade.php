<!-- Sidebar -->
<aside class="sidebar w-64 min-h-screen flex flex-col shadow-xl flex-shrink-0">
    <!-- Brand -->
    <div class="px-6 py-5 sidebar-dark">
        <div class="flex items-center gap-3">
            <div class="bg-white rounded-lg p-2">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
            </div>
            <div>
                <h1 class="text-white font-bold text-lg leading-none">PWL POS</h1>
                <p class="text-blue-200 text-xs">Point of Sale</p>
            </div>
        </div>
    </div>

    <!-- User Info -->
    <div class="px-4 py-4 border-b border-blue-700">
        <div class="flex items-center gap-3 bg-blue-700 bg-opacity-40 rounded-xl px-3 py-3">
            <div class="w-9 h-9 rounded-full bg-white flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 font-bold text-sm">
                    {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                </span>
            </div>
            <div class="overflow-hidden">
                <p class="text-white text-sm font-semibold truncate">{{ auth()->user()->name ?? 'User' }}</p>
                <p class="text-blue-200 text-xs truncate">{{ auth()->user()->email ?? '' }}</p>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-3 py-4 space-y-1">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
           class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-xl text-white text-sm font-medium transition-all duration-150 {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            Dashboard
        </a>

        <!-- Home -->
        <a href="/home"
           class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-xl text-white text-sm font-medium transition-all duration-150 {{ request()->is('home') ? 'active' : '' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h7"/>
            </svg>
            Home
        </a>

        <!-- Products (dengan sub-kategori) -->
        <div>
            <p class="text-blue-300 text-xs font-semibold px-4 pt-3 pb-1 uppercase tracking-wider">Produk</p>
            @foreach([
                'food-beverage'  => '🍔 Food & Beverage',
                'beauty-health'  => '💄 Beauty & Health',
                'home-care'      => '🏠 Home Care',
                'baby-kid'       => '👶 Baby & Kid',
            ] as $slug => $label)
            <a href="/category/{{ $slug }}"
               class="sidebar-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-blue-100 text-sm transition-all duration-150 {{ request()->is('category/'.$slug) ? 'active' : '' }}">
                <span class="text-base leading-none">{{ explode(' ', $label)[0] }}</span>
                <span>{{ implode(' ', array_slice(explode(' ', $label), 1)) }}</span>
            </a>
            @endforeach
        </div>

        <!-- Users -->
        <p class="text-blue-300 text-xs font-semibold px-4 pt-3 pb-1 uppercase tracking-wider">Manajemen</p>
        <a href="/user/1/name/profil"
           class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-xl text-white text-sm font-medium transition-all duration-150 {{ request()->is('user/*') ? 'active' : '' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
            User
        </a>

        <!-- Penjualan -->
        <a href="/penjualan"
           class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-xl text-white text-sm font-medium transition-all duration-150 {{ request()->is('penjualan') ? 'active' : '' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
            </svg>
            Penjualan
        </a>
    </nav>

    <!-- Logout -->
    <div class="px-3 py-4 border-t border-blue-700">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="sidebar-item w-full flex items-center gap-3 px-4 py-3 rounded-xl text-white text-sm font-medium transition-all duration-150 hover:bg-red-500">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                Keluar
            </button>
        </form>
    </div>
</aside>
