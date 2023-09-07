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
        // Array users associati ai ristoranti
        $users = [
            [
                'name' => 'Mario',
                'email' => 'mario@ristorantedamario.com',
                'password' => bcrypt('mario')
            ],
            [
                'name' => 'Bella Italia',
                'email' => 'bellaitalia@trattoriabellaitalia.com',
                'password' => bcrypt('bellaitalia')
            ],
            [
                'name' => 'Taco',
                'email' => 'mexicaneats@tacofiesta.com',
                'password' => bcrypt('taco')
            ],
            [
                'name' => 'Umami',
                'email' => 'chineseumami@deliciouswok.com',
                'password' => bcrypt('wok')
            ],
            [
                'name' => 'Sushi',
                'email' => 'Sushiheaven@sushiparadise.com',
                'password' => bcrypt('sushi')
            ],
            [
                'name' => 'Frenchflavor',
                'email' => 'frenchflavor@bellecuisine.com',
                'password' => bcrypt('belle')
            ],
            [
                'name' => 'Taste of India',
                'email' => 'indialflavors@tasteofindia.com',
                'password' => bcrypt('india')
            ],
            [
                'name' => 'Il Piatto Forte',
                'email' => 'ilpiattoforte@ilpiattoforte.com',
                'password' => bcrypt('piatto')
            ],
            [
                'name' => 'Verde Voro',
                'email' => 'vegetariano@verdevoro.com',
                'password' => bcrypt('verde')
            ],
            [
                'name' => 'Vegan Vibes',
                'email' => 'veganvibes@plantbasebdeats.com',
                'password' => bcrypt('vegan')
            ],
            [
                'name' => 'Plant Based',
                'email' => 'cioa@plantbasebdeats.com',
                'password' => bcrypt('ciao')
            ]

        ];

        // inserito array multidimensionale
        User::insert($users);
    }
}
