<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cargomobil extends Model
{
    //
    protected $fillable = [
        'tujuan',
        'tipe',
        'tarif',
        'estimasi',
    ];
}
