<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;
    protected $table = "ruang";
    protected $primaryKey = 'id_ruang';
    protected $fillable = [
    'nama_ruang', 'fasilitas','jenis', 'ketersediaan'
];

public function periksa()
    {
        return $this->HasMany('App\Models\Periksa', 'id_ruang', 'id_ruang');
    }
}
