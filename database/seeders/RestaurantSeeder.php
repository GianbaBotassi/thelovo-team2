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
                'image' => 'immagine1.jpg',
            ],
            [
                'email' => 'bellaitalia@trattoriabellaitalia.com',
                'password' => bcrypt('come'),
                'nome_attività' => 'Trattoria Bella Italia',
                'indirizzo' => 'Piazza Venezia, 456',
                'partita_iva' => '23456789012',
                'image' => 'immagine2.jpg',
            ],
            [
                'email' => 'osteriarustica@osteriarustica.com',
                'password' => bcrypt('stai'),
                'nome_attività' => 'Osteria Rustica',
                'indirizzo' => 'Via Firenze, 789',
                'partita_iva' => '34567890123',
                'image' => 'immagine3.jpg',
            ],
            [
                'email' => 'giuseppe@mangiaredagiuseppe.com',
                'password' => bcrypt('tutto'),
                'nome_attività' => 'Mangiare da Giuseppe',
                'indirizzo' => 'Corso Vittorio Emanuele, 101',
                'partita_iva' => '45678901234',
                'image' => 'immagine4.jpg',
            ],
            [
                'email' => 'napoli@pizzerianapoli.com',
                'password' => bcrypt('bene'),
                'nome_attività' => 'Pizzeria Napoli',
                'indirizzo' => 'Via Napoli, 567',
                'partita_iva' => '56789012345',
                'image' => 'immagine5.jpg',
            ]
        ];

        Restaurant::insert($restaurants);
    }
}
