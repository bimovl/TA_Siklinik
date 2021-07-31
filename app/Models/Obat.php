<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Obat extends Model
{
    use HasFactory;
    protected $table = "obat";
    protected $primaryKey = 'id_obat';
    protected $guarded = ['id_obat'];

    public function resep()
    {
        return $this->hasMany('App\Models\Resep', 'id_obat', 'id_obat');
    }
}
