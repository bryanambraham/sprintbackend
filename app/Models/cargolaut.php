<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cargolaut extends Model
{
    //
    protected $fillable = [
        'tujuan',
        'tipe',
        'tarif',
        'min_charge',
        'estimasi',
    ];
}
