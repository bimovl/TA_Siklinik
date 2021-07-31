<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_admin';
    protected $table = 'admins';
    protected $fillable = [
        'nama', 'jeniskelamin','username', 'password', 'level'
    ];
    
}
