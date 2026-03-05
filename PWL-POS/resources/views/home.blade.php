@extends('layouts.app')

@section('content')
    <style>
        .hero {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 18px;
            align-items: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(139,92,246,.2);
            border: 1px solid rgba(139,92,246,.45);
            color: #e9d5ff;
            padding: 8px 12px;
            border-radius: 999px;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .hero-title {
            margin: 0;
            font-size: 42px;
            line-height: 1.08;
            letter-spacing: -.02em;
            background: linear-gradient(90deg, #ddd6fe, #c4b5fd, #f5d0fe);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-sub {
            margin-top: 12px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        .cta-row {
            margin-top: 18px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            border-radius: 12px;
            padding: 10px 14px;
            font-size: 13px;
            border: 1px solid rgba(255,255,255,.15);
            color: #fff;
        }

        .btn-primary {
            background: linear-gradient(135deg, rgba(139,92,246,.95), rgba(168,85,247,.95));
            border-color: rgba(196,181,253,.5);
        }

        .btn-secondary {
            background: rgba(255,255,255,.04);
        }

        .preview {
            position: relative;
            border-radius: 16px;
            border: 1px solid rgba(139,92,246,.35);
            background: radial-gradient(circle at 20% 20%, rgba(168,85,247,.25), rgba(17,24,39,.65));
            padding: 18px;
            overflow: hidden;
        }

        .preview .pulse {
            position: absolute;
            right: -35px;
            top: -35px;
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background: rgba(139,92,246,.2);
            animation: pulse 2.2s ease-in-out infinite;
        }

        .kpi-grid {
            margin-top: 18px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(165px, 1fr));
            gap: 10px;
        }

        .kpi {
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 12px;
            background: rgba(255,255,255,.03);
            padding: 12px;
        }

        .kpi small { color: #94a3b8; display: block; }
        .kpi strong { font-size: 22px; color: #ddd6fe; }

        .feature-grid {
            margin-top: 18px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 10px;
        }

        .feature {
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 12px;
            background: rgba(255,255,255,.02);
            padding: 12px;
        }

        .feature h4 { margin: 0 0 6px 0; color: #ddd6fe; }
        .feature p { margin: 0; color: #cbd5e1; font-size: 14px; line-height: 1.55; }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: .5; }
            50% { transform: scale(1.08); opacity: 1; }
        }

        @media (max-width: 768px) {
            .hero { grid-template-columns: 1fr; }
            .hero-title { font-size: 34px; }
        }
    </style>

    <section class="hero">
        <div>
            <span class="hero-badge">⚡ Smart POS Dashboard</span>
            <h1 class="hero-title">Kelola Penjualan POS Lebih Cepat, Rapi, dan Modern.</h1>
            <p class="hero-sub">
                PWL POS membantu manajemen produk, user, dan transaksi penjualan dalam satu platform.
                Fokus pada operasional toko tanpa ribet pencatatan manual.
            </p>

            <div class="cta-row">
                <a class="btn btn-primary" href="{{ route('products.category', 'food-beverage') }}">Lihat Produk</a>
                <a class="btn btn-secondary" href="{{ route('sales') }}">Lihat Penjualan</a>
                <a class="btn btn-secondary" href="{{ route('user.profile', ['id' => 1, 'name' => 'hafis']) }}">Profil User</a>
            </div>
        </div>

        <div class="preview">
            <div class="pulse"></div>
            <h3 style="margin-top:0;color:#ddd6fe;">Preview Sistem POS</h3>
            <p class="muted">Satu alur kerja untuk stok, kategori, transaksi, dan laporan.</p>
            <ul style="line-height:1.7; color:#e2e8f0; padding-left: 20px; margin-bottom: 0;">
                <li>Monitoring data produk real dari database</li>
                <li>Relasi Eloquent antar entitas POS</li>
                <li>Manajemen user dan role</li>
                <li>Transaksi penjualan terstruktur</li>
            </ul>
        </div>
    </section>

    <section class="kpi-grid">
        <div class="kpi">
            <small>Total Produk</small>
            <strong>4</strong>
        </div>
        <div class="kpi">
            <small>Total Kategori</small>
            <strong>4</strong>
        </div>
        <div class="kpi">
            <small>Transaksi Hari Ini</small>
            <strong>24</strong>
        </div>
        <div class="kpi">
            <small>Status Sistem</small>
            <strong style="color:#86efac;">Aktif</strong>
        </div>
    </section>

    <section class="feature-grid">
        <article class="feature">
            <h4>📦 Product Management</h4>
            <p>Data produk ditampilkan dari database dengan filter kategori yang jelas.</p>
        </article>
        <article class="feature">
            <h4>👤 User & Role</h4>
            <p>Pengelolaan user berbasis level untuk kontrol akses operasional.</p>
        </article>
        <article class="feature">
            <h4>💳 Sales Tracking</h4>
            <p>Pencatatan transaksi penjualan dan detail barang secara terstruktur.</p>
        </article>
    </section>
@endsection
