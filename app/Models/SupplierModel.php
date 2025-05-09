<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    use HasFactory;

    protected $table = 'm_suppliers'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'supplier_id';

    protected $fillable = ['kode_supplier', 'nama_supplier', 'alamat', 'telepon', 'email', 'kontak_person'];
}
