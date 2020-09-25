<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arbre extends Model
{
    protected $fillable = ['usage', 'nom', 'foyer_id'];
}
