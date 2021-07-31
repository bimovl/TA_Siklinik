<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'devices';
    protected $fillable = [
        'id_pasien', 'sensor'
    ];

    public function pasien()
    {
        return $this->belongsTo('App\Models\Pasien', 'id_pasien', 'id_pasien');
    }
}
