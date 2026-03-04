@extends('layouts.app')

@section('content')
    <h1>Penjualan</h1>
    <p class="muted">Ringkasan transaksi POS.</p>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:12px;">
        <div class="card">
            <p class="muted">Total transaksi</p>
            <h3 style="margin:0;color:#ddd6fe;">24</h3>
        </div>
        <div class="card">
            <p class="muted">Omzet hari ini</p>
            <h3 style="margin:0;color:#ddd6fe;">Rp 3.250.000</h3>
        </div>
        <div class="card">
            <p class="muted">Status kasir</p>
            <h3 style="margin:0;color:#86efac;">Aktif</h3>
        </div>
    </div>
@endsection
