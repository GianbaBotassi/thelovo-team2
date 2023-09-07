<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "nome",
        "indirizzo",
        "partita_iva",
        "image"
    ];

    // collegamento tra i ristoranti e i prodotti ( One to Many )
    public function products()
    {
        return $this->hasMany(Product::class); // Assumendo che il nome del modello sia "Product"
    }

    // collegamento tra i ristoranti e le tipologie ( Many to Many )
    public function typologies()
    {
        return $this->belongsToMany(Typology::class);
    }

    // Relazione onetoone tra ristoranti e user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
