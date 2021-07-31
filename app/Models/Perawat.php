<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawat extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_perawat';
    protected $table = 'perawats';
    protected $guarded = ['id_perawat'];
}
