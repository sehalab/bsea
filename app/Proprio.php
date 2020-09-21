<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprio extends Model
{
    protected $fillable = [
        "nom", "prenom", "telephone", "adresse"
    ];
}
