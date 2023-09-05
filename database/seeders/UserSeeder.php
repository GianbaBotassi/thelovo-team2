<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Ristorante da Mario',
                'email' => 'mario@ristorantedamario.com',
                'password' => bcrypt('mario')
            ],
            [
                'name' => 'Trattoria Bella Italia',
                'email' => 'bellaitalia@trattoriabellaitalia.com',
                'password' => bcrypt('bellaitalia')
            ],
            [
                'name' => 'Taco Fiesta Messicano',
                'email' => 'mexicaneats@tacofiesta.com',
                'password' => bcrypt('taco')
            ],
            [
                'name' => 'Delicious Wok Cinese',
                'email' => 'chineseumami@deliciouswok.com',
                'password' => bcrypt('wok')
            ],
            [
                'name' => 'Sushi Paradise Giapponese',
                'email' => 'Sushiheaven@sushiparadise.com',
                'password' => bcrypt('sushi')
            ],
            [
                'name' => 'Belle Cuisine Francais',
                'email' => 'frenchflavor@bellecuisine.com',
                'password' => bcrypt('belle')
            ],
            [
                'name' => 'Taste Of India',
                'email' => 'indialflavors@tasteofindia.com',
                'password' => bcrypt('india')
            ],
            [
                'name' => 'Il Piatto Forte',
                'email' => 'ilpiattoforte@ilpiattoforte.com',
                'password' => bcrypt('piatto')
            ],
            [
                'name' => 'Verde Voro - Ristorante Vegetariano',
                'email' => 'vegetariano@verdevoro.com',
                'password' => bcrypt('verde')
            ],
            [
                'name' => 'Green Bites - Ristorante Vegano',
                'email' => 'veganvibes@plantbasebdeats.com',
                'password' => bcrypt('vegan')
            ]
        ];

        User::insert($users);
    }
}
