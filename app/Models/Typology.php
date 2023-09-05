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

    function Restaurant(){
        return $this->belongsToMany('App\Models\Restaurant');
    }
}
