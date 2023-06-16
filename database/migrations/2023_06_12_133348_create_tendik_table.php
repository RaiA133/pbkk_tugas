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
        Schema::create('tendik', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenkel');
            $table->string('alamat');
            $table->string('hp');
            $table->string('bagian');
            $table->string('email');
            $table->string('foto');
            $table->string('no_ktp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.s
     */
    public function down(): void
    {
        Schema::dropIfExists('tendik');
    }
};
