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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->string('nik',16)->unique();
            $table->string('nama_pelapor',30)->nullable();
            $table->enum('jl', ['Pengaduan','Aspirasi']);
            $table->string('judul_laporan',50)->nullable();
            $table->date('tgl_kejadian')->nullable();
            $table->text('isi_laporan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
