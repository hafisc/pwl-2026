@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <p class="muted">Demo Jobsheet 04 menggunakan metode: <strong>{{ $methodName }}</strong></p>

    <div class="card" style="margin-bottom: 14px;">
        <h3 style="margin-top: 0;color:#ddd6fe;">5 Data User Terbaru</h3>
        <ul>
            @forelse($latestUsers as $u)
                <li>{{ $u->user_id }} - {{ $u->username }} - {{ $u->nama }} (level_id: {{ $u->level_id }})</li>
            @empty
                <li>Belum ada data user.</li>
            @endforelse
        </ul>
    </div>

    @if($singleData)
        <div class="card">
            <h3 style="margin-top: 0;color:#ddd6fe;">Hasil Retrieving Single Models</h3>
            <ul>
                <li><strong>find(1):</strong> {{ $singleData['find']?->nama ?? 'null' }}</li>
                <li><strong>first():</strong> {{ $singleData['first']?->nama ?? 'null' }}</li>
                <li><strong>firstWhere(level_id,1):</strong> {{ $singleData['firstWhere']?->nama ?? 'null' }}</li>
            </ul>
        </div>
    @endif
@endsection
