<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temoignage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image', 'titre','description','client_id'
    ];
    public function clients(){
        return $this->belongsTo(Client::class);
    }

}
