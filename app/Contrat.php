<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    public $timestamps = false;
    protected $table="contrats";
    protected $fillable = ['date_depart','date_reprise','km_depart','km_retour','duree_estime','heure_de_livraison','heure_de_reprise','montant_accompte'];
    public function clients(){
        
        return $this->belongsTo('App\Client','client_id','id');    
    }
    public function vehicules(){
            return $this->belongsTo('App\Vehicule','vehicule_id','id');   
     }
    public function agences()
        {
            return $this->belongsToMany('App\Agence');
        }
}
