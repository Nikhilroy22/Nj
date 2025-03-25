<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beting extends Model
{
    use HasFactory;
     protected $fillable = [
        'team1',
        'team2',
        'team1_odds',
        'team2_odds',
    ];
}
