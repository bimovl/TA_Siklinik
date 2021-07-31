<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jadwal';
    protected $table = 'jadwals';
    protected $guarded = ['id_jadwal'];

    public function dokter()
    {
        return $this->belongsTo('App\Models\Dokter', 'id_dokter', 'id_dokter');
    }

    public function poli()
    {
        return $this->belongsTo('App\Models\Poli', 'id_poli', 'id_poli');
    }
}
