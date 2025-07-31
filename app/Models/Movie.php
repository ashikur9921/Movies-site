<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    
    protected $fillable = [
        'name',
        'type',
        'movie_image_link',
        'rating',
        'description',
        'download_link',
        'watch_link',
        'trailer',
        'categori',
    ];
}
