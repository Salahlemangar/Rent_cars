<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    public $timestamps = false;
    protected $table="marques";
    protected $fillable = ['nom_marque'
    ];
    public function modeles()
    {
       return $this->hasMany('App\Modele');
    }
    public function vehicules()
    {
       return $this->hasMany('App\Vehicule');
    }
}
