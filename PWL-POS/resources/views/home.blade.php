@extends('layouts.app')

@section('content')
    <style>
        .hero {
            display: grid;
            grid-template-columns: 1fr 220px;
            gap: 16px;
            align-items: center;
        }

        .char-wrap {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 210px;
            border-radius: 18px;
            border: 1px solid rgba(139,92,246,.4);
            background: radial-gradient(circle at 30% 20%, rgba(168,85,247,.35), rgba(17,24,39,.5));
            overflow: hidden;
        }

        .char-core {
            font-size: 70px;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,.35));
            animation: floaty 3s ease-in-out infinite;
        }

        .ring {
            position: absolute;
            width: 130px;
            height: 130px;
            border: 2px dashed rgba(196,181,253,.6);
            border-radius: 999px;
            animation: spin 9s linear infinite;
        }

        .pulse {
            position: absolute;
            width: 180px;
            height: 180px;
            border-radius: 999px;
            background: rgba(139,92,246,.15);
            animation: pulse 2.2s ease-in-out infinite;
        }

        @keyframes floaty {
            0%,100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(2deg); }
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes pulse {
            0%,100% { transform: scale(1); opacity: .5; }
            50% { transform: scale(1.08); opacity: 1; }
        }

        @media (max-width: 768px) {
            .hero { grid-template-columns: 1fr; }
        }
    </style>

    <div class="hero">
        <div>
            <h1>Home POS</h1>
            <p class="muted">Selamat datang di project <strong>PWL POS</strong> berbasis Laravel 12.</p>

            <div class="card" style="margin-top:16px;">
                <p><strong>Fitur route yang sudah dibuat:</strong></p>
                <ul>
                    <li>Halaman Home</li>
                    <li>Halaman Products per kategori</li>
                    <li>Halaman User (parameter ID & Nama)</li>
                    <li>Halaman Penjualan</li>
                </ul>
            </div>
        </div>

        <div class="char-wrap">
            <div class="pulse"></div>
            <div class="ring"></div>
            <div class="char-core">🤖</div>
        </div>
    </div>
@endsection
