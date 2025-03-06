<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi
    protected $fillable = [
        'title', 'writer', 'summary', 'content', 'image', 'created_at', 'updated_at'
    ];
}
