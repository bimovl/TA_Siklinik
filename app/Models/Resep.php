<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_resep';
    protected $table = 'resep';
    protected $guarded = ['id_resep'];
    

    public function obat()
    {
        return $this->belongsTo('App\Models\Obat', 'id_obat', 'id_obat');
    }

    public function pasien()
    {
        return $this->belongsTo('App\Models\Pasien', 'id_pasien', 'id_pasien');
    }
}