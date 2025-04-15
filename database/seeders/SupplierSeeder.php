<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupplierSeeder extends Seeder
{
    public function run():void
    {
        DB::table('m_suppliers')->insert([
            [
                'kode_supplier' => 'SUP001',
                'nama_supplier' => 'PT Sumber Makmur',
                'alamat' => 'Jl. Kenanga No. 12, Surabaya',
                'telepon' => '081234567890',
                'email' => 'supplier1@example.com',
                'kontak_person' => 'Budi Santoso',
            ],
            [
                'kode_supplier' => 'SUP002',
                'nama_supplier' => 'CV Maju Jaya',
                'alamat' => 'Jl. Melati No. 5, Malang',
                'telepon' => '081298765432',
                'email' => 'supplier2@example.com',
                'kontak_person' => 'Ani Wijaya',
            ],

        ]);
    }

}

