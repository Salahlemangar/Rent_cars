<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    protected $table="employees";
    protected $fillable = ['nom','prenom','date_embauche','categorie_employee'];
    public function agences()
    {
       return $this->hasMany('App\Agence');
    }
}
