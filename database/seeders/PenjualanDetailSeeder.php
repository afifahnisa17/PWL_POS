<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Penjualan 1 (3 barang)
            ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 15000, 'jumlah' => 2],
            ['penjualan_id' => 1, 'barang_id' => 2, 'harga' => 12000, 'jumlah' => 1],
            ['penjualan_id' => 1, 'barang_id' => 3, 'harga' => 18000, 'jumlah' => 3],

            // Penjualan 2 (3 barang)
            ['penjualan_id' => 2, 'barang_id' => 4, 'harga' => 20000, 'jumlah' => 2],
            ['penjualan_id' => 2, 'barang_id' => 5, 'harga' => 25000, 'jumlah' => 1],
            ['penjualan_id' => 2, 'barang_id' => 6, 'harga' => 30000, 'jumlah' => 2],

            // Penjualan 3 (3 barang)
            ['penjualan_id' => 3, 'barang_id' => 7, 'harga' => 12000, 'jumlah' => 1],
            ['penjualan_id' => 3, 'barang_id' => 8, 'harga' => 14000, 'jumlah' => 2],
            ['penjualan_id' => 3, 'barang_id' => 9, 'harga' => 16000, 'jumlah' => 3],

            // Penjualan 4 (3 barang)
            ['penjualan_id' => 4, 'barang_id' => 10, 'harga' => 13000, 'jumlah' => 1],
            ['penjualan_id' => 4, 'barang_id' => 1, 'harga' => 15000, 'jumlah' => 2],
            ['penjualan_id' => 4, 'barang_id' => 2, 'harga' => 12000, 'jumlah' => 1],

            // Penjualan 5 (3 barang)
            ['penjualan_id' => 5, 'barang_id' => 3, 'harga' => 18000, 'jumlah' => 3],
            ['penjualan_id' => 5, 'barang_id' => 4, 'harga' => 20000, 'jumlah' => 2],
            ['penjualan_id' => 5, 'barang_id' => 5, 'harga' => 25000, 'jumlah' => 1],

            // Penjualan 6 (3 barang)
            ['penjualan_id' => 6, 'barang_id' => 6, 'harga' => 30000, 'jumlah' => 2],
            ['penjualan_id' => 6, 'barang_id' => 7, 'harga' => 12000, 'jumlah' => 1],
            ['penjualan_id' => 6, 'barang_id' => 8, 'harga' => 14000, 'jumlah' => 2],

            // Penjualan 7 (3 barang)
            ['penjualan_id' => 7, 'barang_id' => 9, 'harga' => 16000, 'jumlah' => 3],
            ['penjualan_id' => 7, 'barang_id' => 10, 'harga' => 13000, 'jumlah' => 1],
            ['penjualan_id' => 7, 'barang_id' => 1, 'harga' => 15000, 'jumlah' => 2],

            // Penjualan 8 (3 barang)
            ['penjualan_id' => 8, 'barang_id' => 2, 'harga' => 12000, 'jumlah' => 1],
            ['penjualan_id' => 8, 'barang_id' => 3, 'harga' => 18000, 'jumlah' => 3],
            ['penjualan_id' => 8, 'barang_id' => 4, 'harga' => 20000, 'jumlah' => 2],

            // Penjualan 9 (3 barang)
            ['penjualan_id' => 9, 'barang_id' => 5, 'harga' => 25000, 'jumlah' => 1],
            ['penjualan_id' => 9, 'barang_id' => 6, 'harga' => 30000, 'jumlah' => 2],
            ['penjualan_id' => 9, 'barang_id' => 7, 'harga' => 12000, 'jumlah' => 1],

            // Penjualan 10 (3 barang)
            ['penjualan_id' => 10, 'barang_id' => 8, 'harga' => 14000, 'jumlah' => 2],
            ['penjualan_id' => 10, 'barang_id' => 9, 'harga' => 16000, 'jumlah' => 3],
            ['penjualan_id' => 10, 'barang_id' => 10, 'harga' => 13000, 'jumlah' => 1],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
