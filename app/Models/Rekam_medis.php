<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekam_medis extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_rekammedis';
    protected $table = 'rekam_medis';
    protected $guarded = ['id_rekammedis'];

    public function dokter()
    {
        return $this->belongsTo('App\Models\Dokter', 'id_dokter', 'id_dokter');
    }

    public function pasien()
    {
        return $this->belongsTo('App\Models\Pasien', 'id_pasien', 'id_pasien');
    }
}
