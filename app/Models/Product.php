<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome",
        "descrizione",
        "ingredienti",
        "prezzo",
        "is_visible",
        "is_delete",
        "image",
        "restaurant_id"
    ];


    // collegamento tra i prodotti e i ristoranti
    function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    // collegamento tra i prodotti e gli ordini
    function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
