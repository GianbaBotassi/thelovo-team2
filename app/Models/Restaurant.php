<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [

        "nome_attività",
        "indirizzo",
        "partita_iva",
        "image"
    ];

    // collegamento tra i ristoranti e i prodotti ( One to Many )
    function product()
    {
        return $this->hasMany(Restaurant::class);
    }

    // collegamento tra i ristoranti e le tipologie ( Many to Many )
    function typology()
    {
        return $this->belongsToMany(Typology::class);
    }
    // Relazione onetoone tra ristoranti e user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
