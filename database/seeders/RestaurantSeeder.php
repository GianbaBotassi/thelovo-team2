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
        $restaurants = [
            [
                'email' => 'mario@ristorantedamario.com',
                'password' => bcrypt('ciao'),
                'nome_attività' => 'Ristorante da Mario',
                'indirizzo' => 'Via Roma, 123',
                'partita_iva' => '12345678901',
                'image' => null,
            ],
            [
                'email' => 'bellaitalia@trattoriabellaitalia.com',
                'password' => bcrypt('come'),
                'nome_attività' => 'Trattoria Bella Italia',
                'indirizzo' => 'Piazza Venezia, 456',
                'partita_iva' => '23456789012',
                'image' => null,
            ],
            [
                'email' => 'mexicaneats@tacofiesta.com',
                'password' => bcrypt('TacoTime2023'),
                'nome_attività' => 'Taco Fiesta Messicano',
                'indirizzo' => 'Piazza Maria Immacolata, 42',
                'partita_iva' => '23123456789',
                'image' => 'mexicanfoodparadise.jpg',
            ],
            [
                'email' => 'chineseumami@deliciouswok.com',
                'password' => bcrypt('WokMaster2023'),
                'nome_attività' => 'Delicious Wok Cinese',
                'indirizzo' => 'Via Umbria, 168',
                'partita_iva' => '63987654321',
                'image' => 'chinese_wok.jpg',
            ],
            [
                'email' => 'sushiheaven@sushiparadise.com',
                'password' => bcrypt('SushiLover2023'),
                'nome_attività' => 'Sushi Paradise Giapponese',
                'indirizzo' => 'Via Dante Alighieri, 7',
                'partita_iva' => '54123456789',
                'image' => 'japanese_sushi.jpg',
            ],
            [
                'email' => 'frenchflavor@bellecuisine.com',
                'password' => bcrypt('BonAppetit2023'),
                'nome_attività' => 'Belle Cuisine Française',
                'indirizzo' => 'Via Ugo Foscolo, 25',
                'partita_iva' => '67123456789',
                'image' => 'french_cuisine.jpg',
            ],
            [
                'email' => 'indianflavors@tasteofindia.com',
                'password' => bcrypt('SpicyCurry2023'),
                'nome_attività' => 'Taste of India',
                'indirizzo' => 'Via dei martiri, 123',
                'partita_iva' => '65987654321',
                'image' => 'indian_spices.jpg',
            ],

            [
                'email' => 'ilpiattoforte@ilpiattoforte.com',
                'password' => bcrypt('ilpiattoforte'),
                'nome_attività' => 'Il Piatto Forte',
                'indirizzo' => 'Via Firenze, 789',
                'partita_iva' => '34567890124',
                'image' => 'immagine8.jpg',
            ],

            [
                'email' => 'vegetariano@verdivoro.com',
                'password' => bcrypt('VerdeSapore2023'),
                'nome_attività' => 'Verde Voro - Ristorante Vegetariano',
                'indirizzo' => 'Via Giovanna D Arco, 77',
                'partita_iva' => '49123456789',
                'image' => 'vegetariano_delights.jpg',
            ],
            [
                'email' => 'veganvibes@plantbasedeats.com',
                'password' => bcrypt('GreenEats2023'),
                'nome_attività' => 'Green Bites - Ristorante Vegano',
                'indirizzo' => 'Via IV Novembre, 55',
                'partita_iva' => '99123456789',
                'image' => 'vegan_delights.jpg',
            ]
        ];

        Restaurant::insert($restaurants);


    }
}
