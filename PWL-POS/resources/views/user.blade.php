@extends('layouts.app')

@section('content')
    <h1>User Profile</h1>
    <p class="muted">Data diambil dari parameter URL <code>/user/{id}/{name}</code>.</p>

    <div class="card">
        <p><strong>ID:</strong> {{ $id }}</p>
        <p><strong>Nama:</strong> {{ $name }}</p>
    </div>
@endsection
