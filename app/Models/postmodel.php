<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postmodel extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'postby',
        'file',
        'category',
        'body',
        'counts',
        'slug',
    ];
}

