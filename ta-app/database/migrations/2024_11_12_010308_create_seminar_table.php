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
        Schema::create('seminar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pembimbing_id');
            $table->unsignedBigInteger('penguji_id');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->date('jadwal_bimbingan');
            $table->foreign('pembimbing_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('penguji_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('mahasiswa_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seminar');
    }
};
