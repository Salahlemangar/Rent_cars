<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Client extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'nom'       => $this->nom,
            'prenom'    => $this->prenom,
            'adresse'     =>$this->adresse,
            'categorie' => $this->categorie,
            'CIN' => $this->CIN,
            'permis' => $this->permis,
            'datedenaissance' => $this->datedenaissance,
            'nationnalite' => $this->nationnalite,
            'tel' => $this->tel,
            'email' => $this->email,
        ];
    }
}
