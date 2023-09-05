<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        "email",
        "password",
        "nome_attività",
        "indirizzo",
        "partita_iva",
        "image"
    ];

    function product(){
        return $this->hasMany(Restaurant::class);
    }

    function typology(){
        return $this->belongsToMany(Typology::class);
    }
}
