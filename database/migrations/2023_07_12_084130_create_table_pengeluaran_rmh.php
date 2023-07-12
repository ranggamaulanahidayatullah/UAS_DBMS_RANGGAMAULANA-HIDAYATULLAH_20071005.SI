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
        Schema::create('t_pengeluaran_rmh', function (Blueprint $table) {
            $table->String('nobk','10')->primary();
            $table->date('tanggal',)->Nullable();
            $table->date('noreff',)->Nullable();
            $table->String('bagianid','10')->Nullable();
            $table->String('petugasid','5')->Nullable();
            $table->String('keterangan','50')->Nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pengeluaran_rmh');
    }
};
