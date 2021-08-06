<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composant extends Model
{
    use HasFactory;
    protected $fillable = [
        'composant', 'prix',
    ];
    public function projets(){
        return $this->belongsToMany(Projet::class, 'Projet_has_composant');;


    }
    

}
