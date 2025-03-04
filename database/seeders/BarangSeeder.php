<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Laptop Asus', 'harga_beli' => 7000000, 'harga_jual' => 7500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Smartphone Samsung', 'harga_beli' => 4500000, 'harga_jual' => 5000000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'BRG003', 'barang_nama' => 'Jaket Hoodie', 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 250000, 'harga_jual' => 300000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BRG005', 'barang_nama' => 'Mie Instan', 'harga_beli' => 3000, 'harga_jual' => 3500],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'BRG006', 'barang_nama' => 'Beras Premium 5kg', 'harga_beli' => 65000, 'harga_jual' => 70000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'BRG007', 'barang_nama' => 'Air Mineral 600ml', 'harga_beli' => 3500, 'harga_jual' => 4000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'BRG008', 'barang_nama' => 'Jus Buah Botol', 'harga_beli' => 13000, 'harga_jual' => 15000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'BRG009', 'barang_nama' => 'Setrika Listrik', 'harga_beli' => 180000, 'harga_jual' => 200000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG010', 'barang_nama' => 'Blender Philips', 'harga_beli' => 450000, 'harga_jual' => 500000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
