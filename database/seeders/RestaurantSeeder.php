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

        // Array ristoranti con associato id user
        $restaurants = [
            [
                'user_id' => 1,
                'indirizzo' => 'Via Roma, 123',
                'partita_iva' => '12345678901',
                'image' => null
            ],
            [
                'user_id' => 2,
                'indirizzo' => 'Piazza Venezia, 456',
                'partita_iva' => '23456789012',
                'image' => null
            ],
            [
                'user_id' => 3,
                'indirizzo' => 'Piazza Maria Immacolata, 42',
                'partita_iva' => '23123456789',
                'image' => 'mexicanfoodparadise.jpg',
            ],
            [
                'user_id' => 4,
                'indirizzo' => 'Via Umbria, 168',
                'partita_iva' => '63987654321',
                'image' => 'chinese_wok.jpg',
            ],
            [
                'user_id' => 5,
                'indirizzo' => 'Via Dante Alighieri, 7',
                'partita_iva' => '54123456789',
                'image' => 'japanese_sushi.jpg',
            ],
            [
                'user_id' => 6,
                'indirizzo' => 'Via Ugo Foscolo, 25',
                'partita_iva' => '67123456789',
                'image' => 'french_cuisine.jpg',
            ],
            [
                'user_id' => 7,
                'indirizzo' => 'Via dei martiri, 123',
                'partita_iva' => '65987654321',
                'image' => 'indian_spices.jpg',
            ],
            [
                'user_id' => 8,
                'indirizzo' => 'Via Firenze, 789',
                'partita_iva' => '34567890124',
                'image' => 'immgine8.jpg',
            ],
            [
                'user_id' => 9,
                'indirizzo' => 'Via Giovanna D Arco, 77',
                'partita_iva' => '49123456789',
                'image' => 'vegetariano_delights.jpg',
            ],
            [
                'user_id' => 10,
                'indirizzo' => 'Via IV Novembre, 55',
                'partita_iva' => '99123456789',
                'image' => 'vegan_delights.jpg',
            ]
        ];

        // Inserisce ristoranti nell'array multidimensionale
        Restaurant::insert($restaurants);
    }
}
