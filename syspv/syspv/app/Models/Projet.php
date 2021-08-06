<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'image', 'titre','description',
    ];
    public function typeprojets(){
        return $this->belongsTo(Typeprojet::class);
    }
    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function clients(){
        return $this->belongsTo(Client::class);
    }
    public function secteurs(){
        return $this->belongsTo(Secteur::class);
    }
    public function departements(){
        return $this->belongsTo(Departement::class);
    }
    public function composants(){
        return $this->belongsToMany(Composant::class, 'Projet_has_composant');
    }

}
