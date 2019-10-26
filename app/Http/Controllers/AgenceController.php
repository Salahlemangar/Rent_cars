<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agence;

class AgenceController extends Controller
{
    public function agences(){
        return Agence::all();
     }
    public function show(Agence $agences)
    {
        return $agences;
    }
    public function store(Request $request)
    {
        
      $agence = Agence::create($request->all());

    return response()->json($agence, 201);
    }
     public function update(Request $request, Agence $agence)
    {
        $agence->update($request->all());

      
    }
    public function delete(Agence $agence) 
    {
        $agence->delete();

        return response()->json(null, 204);
    }
}
