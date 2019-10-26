<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicule;

class VehiculeController extends Controller
{
    public function vehicules(){
        return Vehicule::all();
     }
    public function show(Vehicule $vehicules)
    {
        return $vehicules;
    }
    public function store(Request $request)
    {
        
      $vehicule = Vehicule::create($request->all());

    return response()->json($vehicule, 201);
    }
     public function update(Request $request, Vehicule $vehicule)
    {
        $vehicule->update($request->all());

        
    }
    public function delete(Vehicule $vehicule) 
    {
        $vehicule->delete();

        return response()->json(null, 204);
    }
}
