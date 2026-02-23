<!-- Header -->
<header class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-10">
    <div class="flex items-center justify-between px-6 py-4">
        <!-- Page Title -->
        <div>
            <h2 class="text-xl font-semibold text-gray-800">@yield('header', 'Dashboard')</h2>
            <p class="text-xs text-gray-400 mt-0.5">
                {{ now()->locale('id')->isoFormat('dddd, D MMMM Y') }}
            </p>
        </div>

        <!-- Right side -->
        <div class="flex items-center gap-4">
            <!-- Notification Bell -->
            <button class="relative p-2 text-gray-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
            </button>

            <!-- User Info jika sudah login -->
            @auth
            <div class="flex items-center gap-3">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-semibold text-gray-700">{{ auth()->user()->name }}</p>
                    <p class="text-xs text-gray-400">{{ auth()->user()->email }}</p>
                </div>
                <div class="w-9 h-9 rounded-full flex items-center justify-center text-white font-bold text-sm"
                     style="background-color: oklch(48.8% 0.243 264.376);">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
            </div>
            @else
            <a href="{{ route('login') }}"
               class="text-sm font-medium text-white px-4 py-2 rounded-lg transition hover:opacity-90"
               style="background-color: oklch(48.8% 0.243 264.376);">
                Login
            </a>
            @endauth
        </div>
    </div>
</header>
