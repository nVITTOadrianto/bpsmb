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
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat')->unique();
            $table->string('nama_perusahaan');
            $table->text('alamat_perusahaan');
            $table->date('tanggal_masuk');
            $table->time('waktu_masuk');
            $table->string('perihal');
            $table->text('deskripsi')->nullable();
            $table->integer('kode_output'); // 1 untuk "1 Bulat"
            $table->enum('status_dokumen', ['Draft', 'Menunggu Kasubbag TU', 'Menunggu Kepala UPTD', 'Menunggu Sertifikasi', 'Selesai', 'Ditolak'])->default('Draft');
            $table->foreignId('created_by_user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuk');
    }
};
