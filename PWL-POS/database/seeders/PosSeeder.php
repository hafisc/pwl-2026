<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Level;
use App\Models\Penjualan;
use App\Models\PenjualanDetail;
use App\Models\PosUser;
use App\Models\Stok;
use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        $adminLevel = Level::create([
            'level_kode' => 'ADM',
            'level_nama' => 'Administrator',
        ]);

        $kasirLevel = Level::create([
            'level_kode' => 'KSR',
            'level_nama' => 'Kasir',
        ]);

        $admin = PosUser::create([
            'level_id' => $adminLevel->level_id,
            'username' => 'admin',
            'nama' => 'Admin POS',
            'password' => Hash::make('password'),
        ]);

        $kasir = PosUser::create([
            'level_id' => $kasirLevel->level_id,
            'username' => 'kasir1',
            'nama' => 'Kasir Satu',
            'password' => Hash::make('password'),
        ]);

        $supplier = Supplier::create([
            'supplier_kode' => 'SUP01',
            'supplier_nama' => 'PT Sumber Rejeki',
            'supplier_alamat' => 'Malang, Jawa Timur',
        ]);

        $kategori = Kategori::create([
            'kategori_kode' => 'FOOD',
            'kategori_nama' => 'Food & Beverage',
        ]);

        $barang = Barang::create([
            'kategori_id' => $kategori->kategori_id,
            'barang_kode' => 'BRG01',
            'barang_nama' => 'Kopi Susu',
            'harga_beli' => 12000,
            'harga_jual' => 18000,
        ]);

        Stok::create([
            'supplier_id' => $supplier->supplier_id,
            'barang_id' => $barang->barang_id,
            'user_id' => $admin->user_id,
            'stok_tanggal' => now(),
            'stok_jumlah' => 100,
        ]);

        $penjualan = Penjualan::create([
            'user_id' => $kasir->user_id,
            'pembeli' => 'Pelanggan Umum',
            'penjualan_kode' => 'TRX-001',
            'penjualan_tanggal' => now(),
        ]);

        PenjualanDetail::create([
            'penjualan_id' => $penjualan->penjualan_id,
            'barang_id' => $barang->barang_id,
            'harga' => $barang->harga_jual,
            'jumlah' => 2,
        ]);
    }
}
