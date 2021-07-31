<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_periksa';
    protected $table = 'periksas';
    protected $guarded = ['id_periksa'];

    public function pasien()
    {
        return $this->belongsTo('App\Models\Pasien', 'id_pasien', 'id_pasien');
    }

    public function dokter()
    {
        return $this->belongsTo('App\Models\Dokter', 'id_dokter', 'id_dokter');
    }
    public function ruang()
    {
        return $this->belongsTo('App\Models\Ruang', 'id_ruang', 'id_ruang');
    }
}
