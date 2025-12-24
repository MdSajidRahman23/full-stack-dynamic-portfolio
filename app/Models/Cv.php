<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'address',
        'contact',
        'about',
        'education',
        'experience',
        'skills',
        'languages',
        'portfolio',
    ];

    protected $casts = [
        'education' => 'array',
        'experience' => 'array',
        'skills' => 'array',
        'languages' => 'array',
    ];
}
