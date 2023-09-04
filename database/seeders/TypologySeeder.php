<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Typology;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typology = new Typology();

        $typology->nome = "italiano";
        $typology->descrizione = "il miglior ristorante italiano d'italia";
        $typology->image = "";

        $typology->save();
    }
}
