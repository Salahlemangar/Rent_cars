<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modele;

class ModeleController extends Controller
{
    public function modeles(){
        return Modele::all();
     }
    public function show(Modele $modeles)
    {
        return $modeles;
    }
    public function store(Request $request)
    {
        
      $modele = Modele::create($request->all());

    return response()->json($modele, 201);
    }
     public function update(Request $request, Modele $modele)
    {
        $modele->update($request->all());

        
    }
    public function delete(Modele $modele) 
    {
        $modele->delete();

        return response()->json(null, 204);
    }
}
