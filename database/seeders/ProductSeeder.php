<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'nome' => 'Pizza Margherita',
                'descrizione' => 'Pizza classica con pomodoro, mozzarella e basilico.',
                'ingredienti' => 'Pomodoro, mozzarella, basilico',
                'prezzo' => 8.99,
                'is_visible' => true,
                'image' => 'pizza_margherita.jpg',
            ],
            [
                'nome' => 'Coq au Vin',
                'descrizione' => 'Piatto francese con pollo cotto nel vino rosso con funghi e cipolle.',
                'ingredienti' => 'Pollo, vino rosso, funghi, cipolle',
                'prezzo' => 16.99,
                'is_visible' => true,
                'image' => 'coq_au_vin.jpg',
            ],
            [
                'nome' => 'Ramen al Tonkotsu',
                'descrizione' => 'Zuppa giapponese con noodles al tonkotsu e maiale.',
                'ingredienti' => 'Noodles, brodo di maiale, maiale cotto',
                'prezzo' => 12.99,
                'is_visible' => true,
                'image' => 'ramen.jpg',
            ],
            [
                'nome' => 'Pad Thai',
                'descrizione' => 'Piatto tailandese con noodles, gamberetti, uova e arachidi.',
                'ingredienti' => 'Noodles, gamberetti, uova, arachidi',
                'prezzo' => 14.99,
                'is_visible' => true,
                'image' => 'pad_thai.jpg',
            ],
            [
                'nome' => 'Tofu al Curry',
                'descrizione' => 'Piatto vegetariano con tofu, verdure e curry.',
                'ingredienti' => 'Tofu, verdure, curry',
                'prezzo' => 10.99,
                'is_visible' => true,
                'image' => 'tofu_curry.jpg',
            ],
            [
                'nome' => 'Hamburger Messicano',
                'descrizione' => 'Hamburger con chili, guacamole e jalapeños piccanti.',
                'ingredienti' => 'Carne, chili, guacamole, jalapeños',
                'prezzo' => 11.99,
                'is_visible' => true,
                'image' => 'hamburger_messicano.jpg',
            ],
            [
                'nome' => 'Paneer Tikka',
                'descrizione' => 'Antipasto indiano con cubetti di formaggio marinato e grigliato.',
                'ingredienti' => 'Formaggio paneer, spezie, yogurt',
                'prezzo' => 9.99,
                'is_visible' => true,
                'image' => 'paneer_tikka.jpg',
            ],
            [
                'nome' => 'Risotto ai Funghi',
                'descrizione' => 'Piatto italiano con riso, funghi porcini e formaggio parmigiano.',
                'ingredienti' => 'Riso, funghi porcini, formaggio parmigiano',
                'prezzo' => 13.99,
                'is_visible' => true,
                'image' => 'risotto_funghi.jpg',
            ],
            [
                'nome' => 'Dolce al Mango',
                'descrizione' => 'Dolce tailandese con mango, riso glutinoso e latte di cocco.',
                'ingredienti' => 'Mango, riso glutinoso, latte di cocco',
                'prezzo' => 6.99,
                'is_visible' => true,
                'image' => 'dolce_mango.jpg',
            ],
            [
                'nome' => 'Sushi Vegano',
                'descrizione' => 'Assortimento di sushi vegano con avocado, cetriolo e pepe.',
                'ingredienti' => 'Avocado, cetriolo, pepe',
                'prezzo' => 15.99,
                'is_visible' => true,
                'image' => 'sushi_vegano.jpg',
            ],
            [
                'nome' => 'Croissant al Cioccolato',
                'descrizione' => 'Pasticcino francese ripieno di cioccolato fondente.',
                'ingredienti' => 'Farina, burro, cioccolato fondente',
                'prezzo' => 3.99,
                'is_visible' => true,
                'image' => 'croissant_cioccolato.jpg',
            ],
            [
                'nome' => 'Noodles al Curry Verde',
                'descrizione' => 'Noodles tailandesi in salsa di curry verde con gamberetti e verdure.',
                'ingredienti' => 'Noodles, curry verde, gamberetti, verdure',
                'prezzo' => 12.99,
                'is_visible' => true,
                'image' => 'noodles_curry_verde.jpg',
            ],
            [
                'nome' => 'Taco al Pastor',
                'descrizione' => 'Taco messicano con carne di maiale marinata e ananas.',
                'ingredienti' => 'Carne di maiale, ananas, cipolle',
                'prezzo' => 9.99,
                'is_visible' => true,
                'image' => 'taco_pastor.jpg',
            ],
            [
                'nome' => 'Tempura Misto',
                'descrizione' => 'Tempura giapponese con gamberi, verdure e salsa dipping.',
                'ingredienti' => 'Gamberi, verdure, salsa dipping',
                'prezzo' => 14.99,
                'is_visible' => true,
                'image' => 'tempura.jpg',
            ],
            [
                'nome' => 'Insalata Waldorf',
                'descrizione' => 'Insalata classica con mele, sedano, noci e maionese.',
                'ingredienti' => 'Mele, sedano, noci, maionese',
                'prezzo' => 7.99,
                'is_visible' => true,
                'image' => 'insalata_waldorf.jpg',
            ],
            [
                'nome' => 'Sushi Sashimi Deluxe',
                'descrizione' => 'Assortimento di sushi e sashimi giapponese con pesce fresco.',
                'ingredienti' => 'Pesce crudo, riso, alga nori',
                'prezzo' => 18.99,
                'is_visible' => true,
                'image' => 'sushi_sashimi.jpg',
            ],
            [
                'nome' => 'Ratatouille',
                'descrizione' => 'Piatto francese a base di verdure come melanzane, zucchine e pomodori.',
                'ingredienti' => 'Melanzane, zucchine, pomodori',
                'prezzo' => 10.99,
                'is_visible' => true,
                'image' => 'ratatouille.jpg',
            ],
            [
                'nome' => 'Hamburger Vegetariano',
                'descrizione' => 'Hamburger vegetariano con pattina di ceci e verdure.',
                'ingredienti' => 'Pattina di ceci, verdure, pane vegano',
                'prezzo' => 10.99,
                'is_visible' => true,
                'image' => 'hamburger_vegetariano.jpg',
            ],
            [
                'nome' => 'Curry Massaman',
                'descrizione' => 'Curry thailandese con carne, patate e arachidi.',
                'ingredienti' => 'Carne, patate, arachidi',
                'prezzo' => 12.99,
                'is_visible' => true,
                'image' => 'curry_massaman.jpg',
            ],
            [
                'nome' => 'Dal Makhani',
                'descrizione' => 'Piatto indiano a base di lenticchie nere e spezie.',
                'ingredienti' => 'Lenticchie nere, spezie, panna',
                'prezzo' => 11.99,
                'is_visible' => true,
                'image' => 'dal_makhani.jpg',
            ]
        ];

        Product::insert($products);
    }
}
