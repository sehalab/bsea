<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foyer extends Model
{
    protected $fillable = [
        'numero', 'nom_village', 'photo', 'user_id', 'latitude', 'longitude',
        'nom', 'postnom', 'genre', 'etatcivil', 'numerocarte','photo_propriete',
        'statut', 'duree', 'proprio_id',
    ];

    public function propriete()
    {
        return $this->belongsTo('App\Propriete');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function membres(){
        return $this->hasMany('App\Membre');
    }

    public function detail(){
        return $this->belongsTo('App\Details');
    }
}
