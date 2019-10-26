<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    public $timestamps = false;
    protected $table="modeles";
    protected $fillable = ['nom_modele'];
    public function marques(){
        return $this->belongsTo('App\Marque','marque_id','id');    }
     public function vehicules()
    {
       return $this->hasMany('App\Vehicule');
    }
}
