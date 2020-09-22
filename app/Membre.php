<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    protected $fillable = [
        "nomcomplet", "relation", "genre", "age", "niveauetudes", "occupation", "vulnerabilite", "ecole", "etatcivil", "propriete_id",
    ];
}
