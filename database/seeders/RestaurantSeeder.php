<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurant = new Restaurant();

        $restaurant -> email = "mariorossi@mail.com";
        $restaurant -> password = "password";
        $restaurant -> nome_attività = "Pizza Pazza";
        $restaurant -> indirizzo = "Via Giovanni bosco n 44";
        $restaurant -> partita_iva = "23471895043";
        $restaurant -> image = "";

        $restaurant -> save();

        $restaurant = new Restaurant();

        $restaurant -> email = "giovannamassselli@mail.com";
        $restaurant -> password = "password";
        $restaurant -> nome_attività = "Bella Vista";
        $restaurant -> indirizzo = "Via della palma n 2";
        $restaurant -> partita_iva = "32221895043";
        $restaurant -> image = "";

        $restaurant -> save();

    }
}
