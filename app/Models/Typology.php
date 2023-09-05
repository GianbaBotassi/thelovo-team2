<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome",
        "descrizione",
        "image"
    ];

    // collegamento tra i ristoranti e i typology ( Many to Many )
    function restaurant(){
        return $this->belongsToMany(Restaurant::class);
    }
}
