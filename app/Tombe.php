<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tombe extends Model
{
    protected $fillable = [
        "lienparente", "refphoto", "heure", "annee", "foyer_id", "local_E", "local_N"
    ];

    public function foyer()
    {
        return $this->belongsTo('App\Foyer');
    }
}
