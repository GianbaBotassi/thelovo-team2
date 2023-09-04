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

        $restaurant -> email = "andrearossi@mail.com";
        $restaurant -> password = "password1";
        $restaurant -> nome_attività = "Ristorante Italiano";
        $restaurant -> indirizzo = "Via Roma n 123";
        $restaurant -> partita_iva = "12345678901";
        $restaurant -> image = "";

        $restaurant -> save();

        $restaurant = new Restaurant();

        $restaurant -> email = "sarabianchi@mail.com";
        $restaurant -> password = "password2";
        $restaurant -> nome_attività = "Ristorante Giapponese";
        $restaurant -> indirizzo = "Via Venezia n 456";
        $restaurant -> partita_iva = "23456789012";
        $restaurant -> image = "";

        $restaurant -> save();

        $restaurant = new Restaurant();

        $restaurant -> email = "lucamarini@mail.com";
        $restaurant -> password = "password3";
        $restaurant -> nome_attività = "Ristorante Messicano";
        $restaurant -> indirizzo = "Via Napoli n 789";
        $restaurant -> partita_iva = "34567890123";
        $restaurant -> image = "";

        $restaurant -> save();
    }
}
