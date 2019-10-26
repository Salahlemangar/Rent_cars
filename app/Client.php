<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;
    protected $table="clients";
    protected $fillable = ['nom','prenom','adresse',
    'email','categorie','CIN','permis','datedenaissance',
    'nationnalite','tel'];
    public function contrats()
    {
       return $this->hasMany('App\Contrat');
    }
    public function agences()
    {
        return $this->belongsToMany('App\Agence');
    }
}
