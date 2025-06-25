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
        Schema::create('dokumen_persetujuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('surat_masuk_id')->constrained('surat_masuk')->onDelete('cascade');
            $table->foreignId('user_id_penanda_tangan')->constrained('users')->onDelete('cascade');
            $table->string('role_penanda_tangan'); // Contoh: 'Kasubbag TU'
            $table->enum('status_persetujuan', ['Menunggu', 'Disetujui', 'Ditolak'])->default('Menunggu');
            $table->dateTime('tanggal_persetujuan')->nullable();
            $table->string('gambar_ttd')->nullable(); // Path ke gambar vektor TTD
            $table->text('catatan')->nullable();
            $table->integer('urutan_persetujuan'); // 1: Kasubbag TU, 2: Kepala UPTD, 3: Sertifikasi
            $table->timestamps();

            $table->unique(['surat_masuk_id', 'user_id_penanda_tangan', 'urutan_persetujuan'], 'unique_persetujuan_per_user_surat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_persetujuan');
    }
};
