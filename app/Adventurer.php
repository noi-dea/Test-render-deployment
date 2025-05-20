<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventurer extends Model
{
    use HasFactory;

    protected $fillable = [
        'charName',
        'role',
        'race',
        'rank',
        'portrait',
        'sprites',
        'description',
    ];
}
