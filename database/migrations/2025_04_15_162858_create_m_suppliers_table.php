<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_suppliers', function (Blueprint $table) {
            $table->id('supplier_id'); // Primary key
            $table->string('kode_supplier')->unique(); // seperti kode unik: SUP001
            $table->string('nama_supplier');
            $table->string('alamat');
            $table->string('telepon')->nullable(); // bisa null
            $table->string('email')->nullable(); // bisa null juga
            $table->string('kontak_person')->nullable(); // nama orang yang bisa dihubungi
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_suppliers');
    }
};
