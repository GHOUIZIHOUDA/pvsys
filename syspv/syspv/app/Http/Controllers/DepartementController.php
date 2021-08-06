<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;


class DepartementController extends Controller
{
    public function create(Request $request) {
        return ;
        
    }
    
    public function index()
    {
        $departements = Departement::all()->toArray();
        return array_reverse($departements);      
    }

    public function store(Request $request)
    {
        $departements = new Departement();
        
        $departements->specialite = $request->input('specialite');

        $departements->save();
        return response()->json($departements);
    }

    public function show($id)
    {
        $departement = Departement::find($id);
        return response()->json(['departements'=>$departement], 200);
    }

    public function edit() {
        return ;
    }
    public function update($id, Request $request)
    {
        $departements = Departement::find($id);
        $departements->update($request->all());

        return response()->json('Departement updated!');
    }

    public function destroy($id)
    {
        $departement = Departement::find($id);
        $departement->delete();

        return response()->json('Departement deleted!');
    }
}
