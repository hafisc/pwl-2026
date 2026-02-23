@extends('layouts.app')

@section('title', 'User Profil')
@section('header', 'User Profil')

@section('content')
<div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
    <!-- Info Route -->
    <div class="bg-blue-50 rounded-xl p-4 border border-blue-100 mb-6">
        <p class="text-blue-800 font-medium text-sm">ℹ️ Informasi Route</p>
        <code class="text-blue-600 text-sm mt-1 block">GET /user/{id}/name/{name} → UserController@show</code>
    </div>

    <!-- User Card -->
    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6">
        <!-- Avatar -->
        <div class="w-24 h-24 rounded-2xl flex items-center justify-center text-white text-4xl font-bold flex-shrink-0"
             style="background-color: oklch(48.8% 0.243 264.376);">
            {{ strtoupper(substr($name, 0, 1)) }}
        </div>

        <!-- Info -->
        <div class="flex-1 text-center sm:text-left">
            <h2 class="text-2xl font-bold text-gray-800 capitalize">{{ $name }}</h2>
            <p class="text-gray-500 text-sm mt-1">User ID: #{{ $id }}</p>
            <div class="flex flex-wrap gap-3 mt-4 justify-center sm:justify-start">
                <span class="px-3 py-1.5 text-xs font-medium text-white rounded-full"
                      style="background-color: oklch(48.8% 0.243 264.376);">
                    Aktif
                </span>
                <span class="px-3 py-1.5 text-xs font-medium text-gray-600 bg-gray-100 rounded-full">
                    Kasir
                </span>
            </div>
        </div>
    </div>

    <!-- Detail tabel -->
    <div class="mt-8 border border-gray-100 rounded-xl overflow-hidden">
        <table class="w-full text-sm">
            <tbody class="divide-y divide-gray-100">
                <tr class="bg-gray-50">
                    <td class="px-5 py-3 text-gray-500 font-medium w-32">ID</td>
                    <td class="px-5 py-3 text-gray-800">#{{ $id }}</td>
                </tr>
                <tr>
                    <td class="px-5 py-3 text-gray-500 font-medium">Nama</td>
                    <td class="px-5 py-3 text-gray-800 capitalize">{{ $name }}</td>
                </tr>
                <tr class="bg-gray-50">
                    <td class="px-5 py-3 text-gray-500 font-medium">Route Param</td>
                    <td class="px-5 py-3">
                        <code class="text-blue-600 text-xs bg-blue-50 px-2 py-1 rounded">/user/{{ $id }}/name/{{ $name }}</code>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
