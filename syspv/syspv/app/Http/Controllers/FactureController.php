<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;


class FactureController extends Controller
{
    public function create(Request $request) {
        return ;
        
    }
    
    public function index()
    {
        $factures = Facture::all()->toArray();
        return array_reverse($factures);      
    }

    public function store(Request $request)
    {
        $factures = new Facture();
        
        $factures->prixtotal = $request->input('prixtotal');
        $factures->client_id = $request->input('client_id');


        $factures->save();
        return response()->json($factures);
    }

    public function show($id)
    {
        $facture = Facture::find($id);
        return response()->json(['factures'=>$facture], 200);
    }

    public function edit() {
        return ;
    }
    public function update($id, Request $request)
    {
        $facture = Facture::find($id);
        $facture->update($request->all());

        return response()->json('Facture updated!');
    }

    public function destroy($id)
    {
        $facture = Facture::find($id);
        $facture->delete();

        return response()->json('Facture deleted!');
    }
}
