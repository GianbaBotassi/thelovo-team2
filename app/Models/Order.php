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
        "status",
        "data",
        "totale"
    ];

    // collegamento tra i prodotti e gli ordini ( Many to Many )
    function product(){
        return $this->belongsToMany(Product::class);
    }
}
