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
        $typologies = [
            [
                'nome' => 'Italiano',
                'descrizione' => 'La cucina italiana è famosa per i suoi piatti di pasta, pizza, formaggi e prelibatezze come il prosciutto di Parma e il parmigiano reggiano.',
                'image' => null,
            ],
            [
                'nome' => 'Francese',
                'descrizione' => 'La cucina francese è conosciuta per i suoi piatti raffinati, come escargot, foie gras e croissant. Il vino e il formaggio sono anch\'essi importanti.',
                'image' => null,
            ],
            [
                'nome' => 'Cinese',
                'descrizione' => "La cucina cinese offre una vasta gamma di piatti regionali, dall'anatra alla pechinese ai ravioli al vapore. È nota per l'uso di spezie e condimenti.",
                'image' => null,
            ],
            [
                'nome' => 'Thailandese',
                'descrizione' => 'La cucina thailandese è caratterizzata da sapori equilibrati e piccanti. Piatti famosi includono il curry thailandese e il pad thai.',
                'image' => null,
            ],
            [
                'nome' => 'Indiano',
                'descrizione' => 'La cucina indiana è ricca di spezie e offre piatti come il curry, il tandoori e il biryani. Il pane naan è un accompagnamento comune.',
                'image' => null,
            ],
            [
                'nome' => 'Vegetariano',
                'descrizione' => 'La cucina vegetariana si basa su verdure, frutta, legumi e noci. È una scelta alimentare che esclude la carne e il pesce.',
                'image' => null,
            ],
            [
                'nome' => 'Vegano',
                'descrizione' => 'La cucina vegana è una versione più restrittiva della cucina vegetariana, escludendo tutti i prodotti di origine animale, come latte e uova.',
                'image' => null,
            ],
            [
                'nome' => 'Messicano',
                'descrizione' => 'La cucina messicana offre piatti come i tacos, le enchiladas e il guacamole. Il cibo messicano spesso include peperoncino e tortillas.',
                'image' => null,
            ],
            [
                'nome' => 'Giapponese',
                'descrizione' => 'La cucina giapponese è famosa per il sushi, il sashimi e i piatti al teppanyaki. L\'arte della presentazione è un elemento chiave.',
                'image' => null,
            ],
        ];


        Typology::insert($typologies);
    }
}
