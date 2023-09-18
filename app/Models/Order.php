<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome",
        "indirizzo",
        "telefono",
        "email",
        "note",
        "data",
        "status",
        "totale"
    ];

    // collegamento tra i prodotti e gli ordini ( Many to Many )
    function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
