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
        Schema::create('t_barang_rmh', function (Blueprint $table) {
            $table->String('barang','10')->primary();
            $table->String('namabarang','45')->Nullable();
            $table->String('satuan','45')->Nullable();
            $table->String('kategoriid','5')->Nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_barang_rmh');
    }
};
