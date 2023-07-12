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
        Schema::create('t_bagian_rmh', function (Blueprint $table) {
            $table->String('bagian','10')->primary();
            $table->String('namabagian','45')->Nullable();
            $table->String('kepalabagian','45')->Nullable();
            $table->String('telpon','45')->Nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_bagian_rmh');
    }
};
