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

    function restaurant(){
        return $this->belongsToMany(Restaurant::class);
    }
}
