<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pasien';
    protected $table = 'pasiens';
    protected $guarded = ['id_pasien'];

    public function periksa()
    {
        return $this->HasMany('App\Models\Periksa', 'id_pasien', 'id_pasien');
    }

    public function resep()
    {
        return $this->HasMany('App\Models\Resep', 'id_pasien', 'id_pasien');
    }
    public function device()
    {
        return $this->HasMany('App\Models\Device', 'id_pasien', 'id_pasien');
    }
    public function dev()
    {
        return $this->HasMany('App\Models\Dev', 'id_pasien', 'id_pasien');
    }
}
