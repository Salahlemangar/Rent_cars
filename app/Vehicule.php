<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    public $timestamps = false;
    protected $table="vehicules";
    protected $fillable = ['date_dachat','kilometrage','categorie_vehicule','capacite','immatriculation'];
    public function marques(){
        return $this->belongsTo('App\Marque','marque_id','id');    }
    public function modeles(){
        return $this->belongsTo('App\Modele','modele_id','id');
    }    
    public function agences()
    {
        return $this->belongsToMany('App\Agence');
    }
    public function contrats()
    {
       return $this->hasMany('App\Contrat');
    }
}
