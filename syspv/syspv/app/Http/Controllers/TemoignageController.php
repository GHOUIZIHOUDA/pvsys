<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temoignage;
use Illuminate\Support\Str;

class TemoignageController extends Controller
{
    public function create(Request $request) {
        return;
        
    }
    
    public function index()
    {
        $temoignages = Temoignage::all()->toArray();
        return array_reverse($temoignages);      
    }

    public function store(Request $request)
    {        
        $temoignages = Temoignage::create([
            'image' => 'non',
            'titre' => 'title',
            'description' => $request->description ?? 'n',
            'client_id' => 2
        ]);

        return response()->json($temoignages);
    }

    public function show($id)
    {
        $temoignage = Temoignage::find($id);
        return response()->json(['clients'=>$temoignage], 200);
    }

    public function edit() {
        return ;
    }
    public function update($id, Request $request)
    {
        $temoignage = Temoignage::find($id);
        $temoignage->update($request->all());

        return response()->json('Temoignage updated!');
    }

    public function destroy($id)
    {
        $temoignage = Temoignage::find($id);
        $temoignage->delete();

        return response()->json('Temoignage deleted!');
    }
}
