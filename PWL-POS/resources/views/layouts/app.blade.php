<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PWL POS') }} - @yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: 'oklch(48.8% 0.243 264.376)',
                            light: 'oklch(55% 0.22 264)',
                            dark:  'oklch(38% 0.22 264)',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        :root {
            --color-primary: oklch(48.8% 0.243 264.376);
            --color-primary-dark: oklch(38% 0.22 264);
            --color-primary-light: oklch(55% 0.22 264);
        }
        .sidebar { background-color: var(--color-primary); }
        .sidebar-dark { background-color: var(--color-primary-dark); }
        .sidebar-item:hover { background-color: var(--color-primary-light); }
        .sidebar-item.active { background-color: rgba(255,255,255,0.2); }
        .btn-primary {
            background-color: var(--color-primary);
        }
        .btn-primary:hover {
            background-color: var(--color-primary-dark);
        }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex">

    <!-- Sidebar -->
    @include('kasir.partials.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen overflow-hidden">

        <!-- Header -->
        @include('kasir.partials.header')

        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto p-6">
            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200 px-6 py-3 text-center text-xs text-gray-400">
            &copy; {{ date('Y') }} PWL POS &mdash; Politeknik Negeri Malang
        </footer>
    </div>

</body>
</html>
