<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Agence extends Model
{
    public $timestamps = false;
    protected $table="agences";
    protected $fillable = ['nom_agence','adresse_agence'];
    public function employees(){
        return $this->belongsTo('App\Employee','employee_id','id');    }
        public function clients()
        {
            return $this->belongsToMany('App\Client');
        }
        public function contrats()
        {
            return $this->belongsToMany('App\Contrat');
        }
        public function vehicules()
        {
            return $this->belongsToMany('App\Vehicule');
        }
}
