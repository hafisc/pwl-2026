<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('m_level', function (Blueprint $table) {
            $table->id('level_id');
            $table->string('level_kode', 10)->unique();
            $table->string('level_nama', 100);
            $table->timestamps();
        });

        Schema::create('m_user', function (Blueprint $table) {
            $table->id('user_id');
            $table->foreignId('level_id')->constrained('m_level', 'level_id')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('username', 20)->unique();
            $table->string('nama', 100);
            $table->string('password', 255);
            $table->timestamps();
        });

        Schema::create('m_supplier', function (Blueprint $table) {
            $table->id('supplier_id');
            $table->string('supplier_kode', 10)->unique();
            $table->string('supplier_nama', 100);
            $table->string('supplier_alamat', 255);
            $table->timestamps();
        });

        Schema::create('m_kategori', function (Blueprint $table) {
            $table->id('kategori_id');
            $table->string('kategori_kode', 10)->unique();
            $table->string('kategori_nama', 100);
            $table->timestamps();
        });

        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id');
            $table->foreignId('kategori_id')->constrained('m_kategori', 'kategori_id')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('barang_kode', 10)->unique();
            $table->string('barang_nama', 100);
            $table->unsignedInteger('harga_beli');
            $table->unsignedInteger('harga_jual');
            $table->timestamps();
        });

        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id');
            $table->foreignId('supplier_id')->constrained('m_supplier', 'supplier_id')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('barang_id')->constrained('m_barang', 'barang_id')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('user_id')->constrained('m_user', 'user_id')->cascadeOnUpdate()->restrictOnDelete();
            $table->dateTime('stok_tanggal');
            $table->unsignedInteger('stok_jumlah');
            $table->timestamps();
        });

        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->id('penjualan_id');
            $table->foreignId('user_id')->constrained('m_user', 'user_id')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('pembeli', 50);
            $table->string('penjualan_kode', 20)->unique();
            $table->dateTime('penjualan_tanggal');
            $table->timestamps();
        });

        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->id('detail_id');
            $table->foreignId('penjualan_id')->constrained('t_penjualan', 'penjualan_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('barang_id')->constrained('m_barang', 'barang_id')->cascadeOnUpdate()->restrictOnDelete();
            $table->unsignedInteger('harga');
            $table->unsignedInteger('jumlah');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
        Schema::dropIfExists('t_penjualan');
        Schema::dropIfExists('t_stok');
        Schema::dropIfExists('m_barang');
        Schema::dropIfExists('m_kategori');
        Schema::dropIfExists('m_supplier');
        Schema::dropIfExists('m_user');
        Schema::dropIfExists('m_level');
    }
};
