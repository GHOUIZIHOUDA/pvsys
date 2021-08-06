<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{
    public function create(Request $request) {
        return ;
        
    }
    
    public function index()
    {
        $clients = Client::all()->toArray();
        return array_reverse($clients);      
    }

    public function store(Request $request)
    {        
        $clients = Client::create([
            'nom' => $request->nom ?? 'n',
            'prenom' => $request->prenom ?? 'n',
            'email' => $request->email ?? 'n',
            'passeword' => $request->passeword ?? 'n',
            'telephone' => $request->telephone ?? 'n',
            'adresse' => $request->adresse ?? 'n',
            'descriptionprojet' => $request->descriptionprojet ?? 'n',
            'description' => $request->description ?? 'n',
        ]);

        return response()->json($clients);
    }

    public function show($id)
    {
        $client = Client::find($id);
        return response()->json(['clients'=>$client], 200);
    }

    public function edit() {
        return ;
    }
    public function update($id, Request $request)
    {
        $client = Client::find($id);
        $client->update($request->all());

        return response()->json('Client updated!');
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();

        return response()->json('Client deleted!');
    }
}
