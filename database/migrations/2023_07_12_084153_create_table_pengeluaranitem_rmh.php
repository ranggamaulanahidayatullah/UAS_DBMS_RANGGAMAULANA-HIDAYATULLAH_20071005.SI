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
        Schema::create('t_pengeluaranitem_rmh', function (Blueprint $table) {
            $table->integer('id',)->primary();
            $table->String('nobk','10')->Nullable();
            $table->String('barangid','10')->Nullable();
            $table->integer('jumlah',)->Nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pengeluaranitem_rmh');
    }
};
