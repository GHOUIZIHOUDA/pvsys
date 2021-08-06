<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typeprojet;


class TypeprojetController extends Controller
{
    public function create(Request $request) {
        return ;
        
    }
    
    public function index()
    {
        $typeprojets = Typeprojet::all()->toArray();
        return array_reverse($typeprojets);      
    }

    public function store(Request $request)
    {
        $typeprojets = new Typeprojet();
        
        $typeprojets->type = $request->input('type');


        $typeprojets->save();
        return response()->json($typeprojets);
    }

    public function show($id)
    {
        $client = Typeprojet::find($id);
        return response()->json(['typeprojets'=>$client], 200);
    }

    public function edit() {
        return ;
    }
    public function update($id, Request $request)
    {
        $typeprojet = Typeprojet::find($id);
        $typeprojet->update($request->all());

        return response()->json('Typeprojet updated!');
    }

    public function destroy($id)
    {
        $typeprojets = Typeprojet::find($id);
        $typeprojets->delete();

        return response()->json('Typeprojet deleted!');
    }
}
