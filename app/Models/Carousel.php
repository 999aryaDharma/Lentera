<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;

    // Tentukan nama tabel (jika berbeda dengan default)
    protected $table = 'carousels';

    // Tentukan kolom yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'title',
        'image',
    ];

}
