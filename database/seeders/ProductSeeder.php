<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();

        $product -> nome = "pasta rossa";
        $product -> descrizione = "pasta con sugo al pomodoro";
        $product -> ingredienti = "pasta, pomodori, formaggio";
        $product -> prezzo = "5,50";
        $product -> is_visible = "1";
        $product -> image = "";

        $product -> save();
    }
}
