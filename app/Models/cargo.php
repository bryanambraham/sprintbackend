<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
    //
    protected $fillable = [
        'tujuan',
        'estimasi',
        'tarif',
    ];
}
