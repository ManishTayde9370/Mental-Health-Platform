<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counselor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'qualification', 'languages', 'counseling_modes',
        'expertise', 'approach', 'about', 'why_counseling',
        'close_concerns', 'handle_stress', 'profile_image'
    ];

    protected $casts = [
        'languages' => 'array',
        'counseling_modes' => 'array',
        'expertise' => 'array',
        'approach' => 'array',
    ];
}
