<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet_has_composant;
use App\Models\Composant;

class ProjetHasComposantController extends Controller
{
    public function show() {
        $composant = Composant::find(1);
        $projets = $composant->projets; // Returns a Laravel Collection
        foreach($projets as $composant) {
            $composant->pivot->updated_at;
        }   
    }
}
