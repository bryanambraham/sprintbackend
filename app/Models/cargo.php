<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
    //
    protected $fillable = [
        'tipe',
        'jenis',
        // 0 Normal 1 Kargo, 2 Pelni, 3 Self Drive, 4  Towing, 5 Carrier
        'tarif',
        'min_charge',
        'estimasi',
        'daerah',
    ];
}


