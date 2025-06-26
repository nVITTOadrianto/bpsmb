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
        Schema::table('surat_masuk', function (Blueprint $table) {
            //
            $table->date('tanggal_masuk_surat')->nullable()->after('alamat_perusahaan');
            $table->string('nama_komoditi_sampel')->nullable()->after('alamat_perusahaan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surat_masuk', function (Blueprint $table) {
            //
            $table->dropColumn('tanggal_masuk_surat');
            $table->dropColumn('nama_komoditi_sampel');
        });
    }
};
