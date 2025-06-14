<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // Add 'question' to the $fillable property to allow mass assignment
    protected $fillable = ['question'];
}
