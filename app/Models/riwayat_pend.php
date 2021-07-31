<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat_pend extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pend';
    protected $table = 'riwayat_pends';
    protected $fillable = [
        'id_pend', 'id_dokter_pd', 'nama_dokter', 'nama_institusi', 'jenjang_pendidikan', 'tahun_lulus'
    ];

    public function dokter()
    {
        return $this->belongsTo('App\Models\Dokter', 'id_dokter_pd', 'id_dokter');
    }
}
