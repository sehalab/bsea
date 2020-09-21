<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    protected $fillable = [
        'nom',
        'postnom',
        'genre',
        'etatcivil',
        'numerocarte',
        'photo',
        'foyer_id',
    ];
}
