<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foyer extends Model
{
    protected $fillable = [
        'numero', 'nom_village', 'photo', 'user_id',
    ];
}
