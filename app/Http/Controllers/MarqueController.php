<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marque;

class MarqueController extends Controller
{
    public function marques(){
        return Marque::all();
     }
    public function show(Marque $marques)
    {
        return $marques;
    }
    public function store(Request $request)
    {
        
      $marque = Marque::create($request->all());

    return response()->json($marque, 201);
    }
     public function update(Request $request, Marque $marque)
    {
        $marque->update($request->all());

        
    }
    public function delete(Marque $marque) 
    {
        $marque->delete();

        return response()->json(null, 204);
    }
}
