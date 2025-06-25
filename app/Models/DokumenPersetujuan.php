<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenPersetujuan extends Model
{
    use HasFactory;
    protected $table = 'dokumen_persetujuan';
    protected $fillable = [
        'surat_masuk_id', 'user_id_penanda_tangan', 'role_penanda_tangan',
        'status_persetujuan', 'tanggal_persetujuan', 'gambar_ttd',
        'catatan', 'urutan_persetujuan'
    ];

    public function suratMasuk()
    {
        return $this->belongsTo(SuratMasuk::class);
    }

    public function penandaTangan()
    {
        return $this->belongsTo(User::class, 'user_id_penanda_tangan');
    }
}
