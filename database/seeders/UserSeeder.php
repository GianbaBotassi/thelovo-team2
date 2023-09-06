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

                'email' => 'mario@ristorantedamario.com',
                'password' => bcrypt('mario')
            ],
            [

                'email' => 'bellaitalia@trattoriabellaitalia.com',
                'password' => bcrypt('bellaitalia')
            ],
            [

                'email' => 'mexicaneats@tacofiesta.com',
                'password' => bcrypt('taco')
            ],
            [

                'email' => 'chineseumami@deliciouswok.com',
                'password' => bcrypt('wok')
            ],
            [

                'email' => 'Sushiheaven@sushiparadise.com',
                'password' => bcrypt('sushi')
            ],
            [

                'email' => 'frenchflavor@bellecuisine.com',
                'password' => bcrypt('belle')
            ],
            [

                'email' => 'indialflavors@tasteofindia.com',
                'password' => bcrypt('india')
            ],
            [

                'email' => 'ilpiattoforte@ilpiattoforte.com',
                'password' => bcrypt('piatto')
            ],
            [

                'email' => 'vegetariano@verdevoro.com',
                'password' => bcrypt('verde')
            ],
            [

                'email' => 'veganvibes@plantbasebdeats.com',
                'password' => bcrypt('vegan')
            ]
        ];

        // inserito array multidimensionale
        User::insert($users);
    }
}
