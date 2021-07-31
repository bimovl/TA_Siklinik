<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_dokter';
    protected $table = 'dokters';
    protected $guarded = ['id_dokter'];

    public function jadwal()
    {
        return $this->hasMany('App\Models\Jadwal', 'id_dokter', 'id_dokter');
    }

    public function periksa()
    {
        return $this->hasMany('App\Models\Periksa', 'id_dokter', 'id_dokter');
    }
}
