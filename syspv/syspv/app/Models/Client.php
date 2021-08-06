<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom', 'prenom', 'email', 'passeword', 'telephone','adresse','descriptionprojet','ville_id'
    ];
    use Notifiable;
    
    protected $guarded = [];
 

    public function temoignages(){
        return $this->hasMany(Temoignage::class);
    }
    public function villes(){
        return $this->belongsTo(Ville::class);
    }
}
