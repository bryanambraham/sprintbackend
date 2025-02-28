<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    //
    protected $fillable = [
        'image',
        'title',
        'writer',
        'content',
        'summary',
    ];
}
