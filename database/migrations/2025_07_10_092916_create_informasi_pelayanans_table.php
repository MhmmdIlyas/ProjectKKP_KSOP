<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('informasi_pelayanans', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('deskripsi_singkat');
            $table->longText('konten'); // HTML Modal
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('informasi_pelayanans');
    }
};
