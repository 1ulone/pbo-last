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
        Schema::create('detailfeedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa_id');
            $table->unsignedBigInteger('bimbingan_id')->unique();
            $table->unsignedBigInteger('seminar_id')->unique();
            $table->unsignedBigInteger('sidang_id')->unique()->unsigned;
            $table->string('detail');

            $table->foreign('mahasiswa_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('bimbingan_id')->references('id')->on('bimbingan')->cascadeOnDelete();
            $table->foreign('seminar_id')->references('id')->on('seminar')->cascadeOnDelete();
            $table->foreign('sidang_id')->references('id')->on('sidang')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailfeedback');
    }
};
