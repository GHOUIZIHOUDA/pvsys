<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;


class ProjetController extends Controller
{
    public function create(Request $request) {
        return ;
        
    }
    
    public function index()
    {
        $projets = Projet::all()->toArray();
        return array_reverse($projets);      
    }

    public function store(Request $request)
    {
        $projets = new Projet();
        
        $projets->image = $request->input('image');
        $projets->titre = $request->input('titre');
        $projets->description = $request->input('description');
        $projets->typeprojet_id = $request->input('typeprojet_id');
        $projets->status_id = $request->input('status_id');
        $projets->client_id = $request->input('client_id');
        $projets->secteur_id = $request->input('secteur_id');
        $projets->departement_id = $request->input('departement_id');


        $projets->save();
        return response()->json($projets);
    }

    public function show($id)
    {
        $projet = Projet::find($id);
        return response()->json(['projets'=>$projet], 200);
    }

    public function edit() {
        return ;
    }
    public function update($id, Request $request)
    {
        $projet = Projet::find($id);
        $projet->update($request->all());

        return response()->json('Projet updated!');
    }

    public function destroy($id)
    {
        $projet = Projet::find($id);
        $projet->delete();

        return response()->json('Projet deleted!');
    }
}
