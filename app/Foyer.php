<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foyer extends Model
{
    protected $fillable = [
        'numero', 'nom_village', 'photo', 'user_id', 'latitude', 'longitude',
        'nom', 'postnom', 'genre', 'etatcivil', 'numerocarte', 'photo_propriete',
        'statut', 'duree', 'proprio_id',
    ];

    public function propriete()
    {
        return $this->belongsTo('App\Propriete');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function membres()
    {
        return $this->hasMany('App\Membre');
    }

    public function sites()
    {
        return $this->hasMany('App\Site');
    }

    public function tombes()
    {
        return $this->hasMany('App\Tombe');
    }

    public function arbres()
    {
        return $this->hasMany('App\Arbre');
    }

    public function betails()
    {
        return $this->hasMany('App\Betails');
    }

    public function structures()
    {
        return $this->hasMany('App\Structure');
    }
}
