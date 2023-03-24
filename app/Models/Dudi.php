<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dudi extends Model
{
    protected $table='dudis';
    protected $fillable=[
        'id_dudi',
        'nama_dudi',
        'no_hp',
        'alamat',
    ];
}
