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
                'nome' => 'Ristorante da Mario',
                'indirizzo' => 'Via Roma, 123',
                'partita_iva' => '12345678901',
                'image' => 'pizzeria.jpg'
            ],
            [
                'user_id' => 2,
                'nome' => 'Trattoria Bella Italia',
                'indirizzo' => 'Piazza Venezia, 456',
                'partita_iva' => '23456789012',
                'image' => 'trattoria.png'
            ],
            [
                'user_id' => 3,
                'nome' => 'Taco Fiesta Messicano',
                'indirizzo' => 'Piazza Maria Immacolata, 42',
                'partita_iva' => '23123456789',
                'image' => 'risto-messicano.jpg',
            ],
            [
                'user_id' => 4,
                'nome' => 'Delicious Wok Cinese',
                'indirizzo' => 'Via Umbria, 168',
                'partita_iva' => '63987654321',
                'image' => 'wok-chinase.jpg',
            ],
            [
                'user_id' => 5,
                'nome' => 'Sushi Paradise Giapponese',
                'indirizzo' => 'Via Dante Alighieri, 7',
                'partita_iva' => '54123456789',
                'image' => 'sushi-paradise.jpg',
            ],
            [
                'user_id' => 6,
                'nome' => 'Belle Cuisine Francais',
                'indirizzo' => 'Via Ugo Foscolo, 25',
                'partita_iva' => '67123456789',
                'image' => 'risto-french.jpeg',
            ],
            [
                'user_id' => 7,
                'nome' => 'Taste Of India',
                'indirizzo' => 'Via dei martiri, 123',
                'partita_iva' => '65987654321',
                'image' => 'risto-indiano.jpg',
            ],
            [
                'user_id' => 8,
                'nome' => 'Il Piatto Forte',
                'indirizzo' => 'Via Firenze, 789',
                'partita_iva' => '34567890124',
                'image' => 'il-piatto-forte.jpeg',
            ],
            [
                'user_id' => 9,
                'nome' => 'Verde Voro - Ristorante Vegetariano',
                'indirizzo' => 'Via Giovanna D Arco, 77',
                'partita_iva' => '49123456789',
                'image' => 'risto-vegetariano.jpg',
            ],
            [
                'user_id' => 10,
                'nome' => 'Green Bites - Ristorante Vegano',
                'indirizzo' => 'Via IV Novembre, 55',
                'partita_iva' => '99123456789',
                'image' => 'risto-vegano.jpg',
            ]
        ];

        // Inserisce ristoranti nell'array multidimensionale
        Restaurant::insert($restaurants);
    }
}
