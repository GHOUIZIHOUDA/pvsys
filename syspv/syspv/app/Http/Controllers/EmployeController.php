<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;


class EmployeController extends Controller
{
    public function create(Request $request) {
        return ;
        
    }
    
    public function index()
    {
        $employes = Employe::all()->toArray();
        return array_reverse($employes);      
    }

    public function store(Request $request)
    {
        $employes = new Employe();
        
        $employes->nom = $request->input('nom');
        $employes->prenom = $request->input('prenom');
        $employes->email = $request->input('email');
        $employes->passeword = $request->input('passeword');
        $employes->telephone = $request->input('telephone');
        $employes->departement_id = $request->input('departement_id');


        $employes->save();
        return response()->json($employes);
    }

    public function show($id)
    {
        $employe = Employe::find($id);
        return response()->json(['employes'=>$employe], 200);
    }

    public function edit() {
        return ;
    }
    public function update($id, Request $request)
    {
        $employe = Employe::find($id);
        $employe->update($request->all());

        return response()->json('Employe updated!');
    }

    public function destroy($id)
    {
        $employe = Employe::find($id);
        $employe->delete();

        return response()->json('Client deleted!');
    }
}
