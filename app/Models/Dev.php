<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dev extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'devs';
    protected $fillable = [
        'id_pasien', 'sensor'
    ];

    public function pasien()
    {
        return $this->belongsTo('App\Models\Pasien', 'id_pasien', 'id_pasien');
    }
}