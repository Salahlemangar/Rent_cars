<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrat;

class ContratController extends Controller
{
    public function contrats(){
        return Contrat::all();
    }
    public function show(Contrat $contrat)
    {
        return $contrat;
    }
    public function store(Request $request)
    {
        $contrat = Contrat::create($request->all());

        return response()->json($contrat, 201);
    }
    public function update(Request $request, Contrat $contrat)
    {
        $contrat->update($request->all());

        return response()->json($contrat, 200);
    }
    public function delete(Contrat $contrat)
    {
        $contrat->delete();

        return response()->json(null, 204);
    }
}
