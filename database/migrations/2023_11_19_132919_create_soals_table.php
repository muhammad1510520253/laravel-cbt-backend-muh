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
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->String('pertanyaan');
            $table->String('kategori');
            $table->String('jawaban_a');
            $table->String('jawaban_b');
            $table->String('jawaban_c');
            $table->String('jawaban_d');
            $table->enum('kunci',['a','b','c','d']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
