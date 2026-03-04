<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PWL POS' }}</title>
    <style>
        :root {
            --bg: #0b1020;
            --card: rgba(17, 24, 39, 0.75);
            --text: #e5e7eb;
            --muted: #94a3b8;
            --accent: #8b5cf6;
            --accent2: #a855f7;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Inter, Segoe UI, Arial, sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at 10% 10%, rgba(139,92,246,.35), transparent 30%),
                radial-gradient(circle at 85% 30%, rgba(168,85,247,.25), transparent 30%),
                var(--bg);
            min-height: 100vh;
        }

        nav {
            position: sticky;
            top: 0;
            z-index: 10;
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            padding: 14px 20px;
            background: rgba(2, 6, 23, .75);
            border-bottom: 1px solid rgba(255,255,255,.1);
            backdrop-filter: blur(8px);
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 13px;
            padding: 8px 12px;
            border-radius: 999px;
            border: 1px solid rgba(255,255,255,.16);
            transition: .2s ease;
        }

        nav a:hover {
            background: rgba(139,92,246,.35);
            border-color: rgba(139,92,246,.7);
        }

        main {
            max-width: 920px;
            margin: 26px auto;
            padding: 24px;
            border-radius: 18px;
            background: var(--card);
            border: 1px solid rgba(255,255,255,.1);
            box-shadow: 0 20px 60px rgba(0,0,0,.35);
        }

        h1 {
            margin-top: 0;
            font-size: 32px;
            line-height: 1.15;
            letter-spacing: -.02em;
            background: linear-gradient(90deg, #ddd6fe, #c4b5fd, #f5d0fe);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        p { color: var(--text); }

        .muted { color: var(--muted); }

        .chip {
            display: inline-block;
            background: rgba(139,92,246,.2);
            border: 1px solid rgba(139,92,246,.45);
            color: #e9d5ff;
            padding: 7px 12px;
            border-radius: 999px;
            font-size: 12px;
            margin-right: 8px;
            margin-bottom: 8px;
            text-decoration: none;
        }

        .card {
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 14px;
            padding: 14px;
            background: rgba(255,255,255,.03);
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('products.category', 'food-beverage') }}">Products</a>
        <a href="{{ route('user.profile', ['id' => 1, 'name' => 'hafis']) }}">User</a>
        <a href="{{ route('sales') }}">Penjualan</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
