<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;


class VilleController extends Controller
{
    public function create(Request $request) {
        return ;
        
    }
    
    public function index()
    {
        $villes = Ville::all()->toArray();
        return array_reverse($villes);      
    }

    public function store(Request $request)
    {        
        $ville = new Ville([
            'codepostal' => $request->input('codepostal'),
            'ville' => $request->input('ville')
        ]);
        $ville->save();

        return response()->json('ville created!');
    }

    public function show($id)
    {
        $ville = Ville::find($id);
        return response()->json(['villes'=>$ville], 200);
    }

    public function edit() {
        return ;
    }
    public function update($id, Request $request)
    {
        $ville = Ville::find($id);
        $ville->update($request->all());

        return response()->json('Ville updated!');
    }

    public function destroy($id)
    {
        $ville = Ville::find($id);
        $ville->delete();

        return response()->json('Ville deleted!');
    }
}
