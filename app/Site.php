<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        "description", "refphoto", "foyer_id", "local_E", "local_N", "etat"
    ];

    public function foyer()
    {
        return $this->belongsTo('App\Foyer');
    }
}
