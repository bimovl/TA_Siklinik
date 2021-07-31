<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_poli';
    protected $table = 'polis';
    protected $guarded = ['id_polis'];

    public function jadwal()
    {
        return $this->HasMany('App\Models\Jadwal', 'id_jadwal', 'id_jadwal');
    }
}
