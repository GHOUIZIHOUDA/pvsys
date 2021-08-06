<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Composant;


class ComposantController extends Controller
{
    public function create(Request $request) {
        return ;
        
    }
    
    public function index()
    {
        $composants = Composant::all()->toArray();
        return array_reverse($composants); 

    }

    public function store(Request $request)
    {
        $composants = new Composant();
        
        $composants->composant = $request->input('composant');
        $composants->prix = $request->input('prix');


        $composants->save();
        return response()->json($composants);
    }

    public function show($id)
    {
        $composant = Composant::find($id);
        return response()->json(['composants'=>$composant], 200);
    }

    public function edit() {
        return ;
    }
    public function update($id, Request $request)
    {
        $composant = composant::find($id);
        $composant->update($request->all());

        return response()->json('Composant updated!');
    }

    public function destroy($id)
    {
        $composant = Composant::find($id);
        $composant->delete();

        return response()->json('Composant deleted!');
    }
}
