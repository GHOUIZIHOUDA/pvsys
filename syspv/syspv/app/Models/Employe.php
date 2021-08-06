<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'prenom','email','passeword','telephone',
    ];
    public function departements(){
        return $this->hasMany(Departement::class);
    }

}
