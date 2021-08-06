<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secteur;


class SecteurController extends Controller
{
    public function create(Request $request) {
        return ;
        
    }
    
    public function index()
    {
        $secteurs = Secteur::all()->toArray();
        return array_reverse($secteurs);      
    }

    public function store(Request $request)
    {
        $secteurs = new Secteur();
        
        $secteurs->secteur = $request->input('secteur');


        $secteurs->save();
        return response()->json($secteurs);
    }

    public function show($id)
    {
        $secteur = Secteur::find($id);
        return response()->json(['secteurs'=>$secteur], 200);
    }

    public function edit() {
        return ;
    }
    public function update($id, Request $request)
    {
        $secteur = Secteur::find($id);
        $secteur->update($request->all());

        return response()->json('Secteur updated!');
    }

    public function destroy($id)
    {
        $secteur = Secteur::find($id);
        $secteur->delete();

        return response()->json('Secteur deleted!');
    }
}
