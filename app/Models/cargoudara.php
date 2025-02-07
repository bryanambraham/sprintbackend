<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cargoudara extends Model
{
    //
    protected $fillable = [
        'tujuan',
        'tarif',
        'min_charge',
        'estimasi',
    ];
}
