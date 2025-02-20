<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recette extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'ingredients',
        'instructions',
        'image',
        'cooking_time',
        'preparation_time'
    ];

    protected $casts = [
        
    ];
}
