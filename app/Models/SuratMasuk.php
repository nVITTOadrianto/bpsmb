<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    protected $table = 'surat_masuk';
    protected $fillable = [
        'nomor_surat', 'nama_perusahaan', 'alamat_perusahaan',
        'tanggal_masuk', 'waktu_masuk', 'perihal', 'deskripsi',
        'kode_output', 'status_dokumen', 'created_by_user_id'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }

    public function persetujuan()
    {
        return $this->hasMany(DokumenPersetujuan::class);
    }
}
