<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    protected $fillable = [
        "photo", "longueur", "largeur", "materiaux", "propriete_id",
    ];
}
