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
        Schema::create('t_petugas_rmh', function (Blueprint $table) {
            $table->integer('petugasid')->primary();
            $table->String('namapetugas','35')->Nullable();
            $table->String('alamat','45')->Nullable();
            $table->String('handphone','15')->Nullable();
            $table->String('password','10')->Nullable();
            $table->String('level','20')->Nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_petugas_rmh');
    }
};
