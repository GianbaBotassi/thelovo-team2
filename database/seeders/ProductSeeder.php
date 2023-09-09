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

        // Array prodotti ristoranti, già associato l'id del ristorante
        $products = [
            [
                'nome' => 'Pizza Margherita',
                'descrizione' => 'Pizza classica con pomodoro, mozzarella e basilico.',
                'ingredienti' => 'Pomodoro, mozzarella, basilico',
                'prezzo' => 8.99,
                'is_visible' => true,
                'image' => 'pizza-margherita.jpg',
                'restaurant_id' => 1,
            ],
            [
                'nome' => 'Coq au Vin',
                'descrizione' => 'Piatto francese con pollo cotto nel vino rosso con funghi e cipolle.',
                'ingredienti' => 'Pollo, vino rosso, funghi, cipolle',
                'prezzo' => 16.99,
                'is_visible' => true,
                'image' => '',
                'restaurant_id' => 4,
            ],
            [
                'nome' => 'Ramen al Tonkotsu',
                'descrizione' => 'Zuppa giapponese con noodles al tonkotsu e maiale.',
                'ingredienti' => 'Noodles, brodo di maiale, maiale cotto',
                'prezzo' => 12.99,
                'is_visible' => true,
                'image' => 'zuppa-giapponese-ramen.jpg',
                'restaurant_id' => 5,
            ],
            [
                'nome' => 'Pad Thai',
                'descrizione' => 'Piatto tailandese con noodles, gamberetti, uova e arachidi.',
                'ingredienti' => 'Noodles, gamberetti, uova, arachidi',
                'prezzo' => 14.99,
                'is_visible' => true,
                'image' => 'zuppa-giapponese.jpg',
                'restaurant_id' => 7,
            ],
            [
                'nome' => 'Tofu al Curry',
                'descrizione' => 'Piatto vegetariano con tofu, verdure e curry.',
                'ingredienti' => 'Tofu, verdure, curry',
                'prezzo' => 10.99,
                'is_visible' => true,
                'image' => 'piatto-indiano.jpg',
                'restaurant_id' => 9,
            ],
            [
                'nome' => 'Hamburger Messicano',
                'descrizione' => 'Hamburger con chili, guacamole e jalapeños piccanti.',
                'ingredienti' => 'Carne, chili, guacamole, jalapeños',
                'prezzo' => 11.99,
                'is_visible' => true,
                'image' => 'hamburger-vegetariano.jpg',
                'restaurant_id' => 3,
            ],
            [
                'nome' => 'Paneer Tikka',
                'descrizione' => 'Antipasto indiano con cubetti di formaggio marinato e grigliato.',
                'ingredienti' => 'Formaggio paneer, spezie, yogurt',
                'prezzo' => 9.99,
                'is_visible' => true,
                'image' => 'cibo-messicano.jpeg',
                'restaurant_id' => 7,
            ],
            [
                'nome' => 'Risotto ai Funghi',
                'descrizione' => 'Piatto italiano con riso, funghi porcini e formaggio parmigiano.',
                'ingredienti' => 'Riso, funghi porcini, formaggio parmigiano',
                'prezzo' => 13.99,
                'is_visible' => true,
                'image' => 'Risotto-ai-funghi.jpg',
                'restaurant_id' => 2,
            ],
            [
                'nome' => 'Dolce al Mango',
                'descrizione' => 'Dolce tailandese con mango, riso glutinoso e latte di cocco.',
                'ingredienti' => 'Mango, riso glutinoso, latte di cocco',
                'prezzo' => 6.99,
                'is_visible' => true,
                'image' => 'piatto-indiano.jpg',
                'restaurant_id' => 7,
            ],
            [
                'nome' => 'Sushi Vegano',
                'descrizione' => 'Assortimento di sushi vegano con avocado, cetriolo e pepe.',
                'ingredienti' => 'Avocado, cetriolo, pepe',
                'prezzo' => 15.99,
                'is_visible' => true,
                'image' => 'sushi.jpg',
                'restaurant_id' => 10,
            ],
            [
                'nome' => 'Croissant al Cioccolato',
                'descrizione' => 'Pasticcino francese ripieno di cioccolato fondente.',
                'ingredienti' => 'Farina, burro, cioccolato fondente',
                'prezzo' => 3.99,
                'is_visible' => true,
                'image' => 'Croissan.jpg',
                'restaurant_id' => 6,
            ],
            [
                'nome' => 'Noodles al Curry Verde',
                'descrizione' => 'Noodles tailandesi in salsa di curry verde con gamberetti e verdure.',
                'ingredienti' => 'Noodles, curry verde, gamberetti, verdure',
                'prezzo' => 12.99,
                'is_visible' => true,
                'image' => 'zuppa-giapponese.jpg',
                'restaurant_id' => 4,
            ],
            [
                'nome' => 'Taco al Pastor',
                'descrizione' => 'Taco messicano con carne di maiale marinata e ananas.',
                'ingredienti' => 'Carne di maiale, ananas, cipolle',
                'prezzo' => 9.99,
                'is_visible' => true,
                'image' => 'taco.jpg',
                'restaurant_id' => 3,
            ],
            [
                'nome' => 'Tempura Misto',
                'descrizione' => 'Tempura giapponese con gamberi, verdure e salsa dipping.',
                'ingredienti' => 'Gamberi, verdure, salsa dipping',
                'prezzo' => 14.99,
                'is_visible' => true,
                'image' => '',
                'restaurant_id' => 5,
            ],
            [
                'nome' => 'Insalata Waldorf',
                'descrizione' => 'Insalata classica con mele, sedano, noci e maionese.',
                'ingredienti' => 'Mele, sedano, noci, maionese',
                'prezzo' => 7.99,
                'is_visible' => true,
                'image' => 'insalata.jpg',
                'restaurant_id' => 9,
            ],
            [
                'nome' => 'Sushi Sashimi Deluxe',
                'descrizione' => 'Assortimento di sushi e sashimi giapponese con pesce fresco.',
                'ingredienti' => 'Pesce crudo, riso, alga nori',
                'prezzo' => 18.99,
                'is_visible' => true,
                'image' => 'sushi.jpg',
                'restaurant_id' => 5,
            ],
            [
                'nome' => 'Ratatouille',
                'descrizione' => 'Piatto francese a base di verdure come melanzane, zucchine e pomodori.',
                'ingredienti' => 'Melanzane, zucchine, pomodori',
                'prezzo' => 10.99,
                'is_visible' => true,
                'image' => 'cibo-francese.jpg',
                'restaurant_id' => 6,
            ],
            [
                'nome' => 'Hamburger Vegetariano',
                'descrizione' => 'Hamburger vegetariano con pattina di ceci e verdure.',
                'ingredienti' => 'Pattina di ceci, verdure, pane vegano',
                'prezzo' => 10.99,
                'is_visible' => true,
                'image' => 'hamburger-vegetariano.jpg',
                'restaurant_id' => 10,
            ],
            [
                'nome' => 'Curry Massaman',
                'descrizione' => 'Curry thailandese con carne, patate e arachidi.',
                'ingredienti' => 'Carne, patate, arachidi',
                'prezzo' => 12.99,
                'is_visible' => true,
                'image' => 'curry-indiano.jpeg',
                'restaurant_id' => 3,
            ],
            [
                'nome' => 'Dal Makhani',
                'descrizione' => 'Piatto indiano a base di lenticchie nere e spezie.',
                'ingredienti' => 'Lenticchie nere, spezie, panna',
                'prezzo' => 11.99,
                'is_visible' => true,
                'image' => 'cibo-indiano-lenticchie.jpeg',
                'restaurant_id' => 7,
            ],
            [
                'nome' => 'Misto di carne',
                'descrizione' => 'Fettina, sovracoscia, bombette e spiedini con contorno melanzane, zucchine, pomodori, sedano, noci e maionese.',
                'ingredienti' => 'Fettina, sovracoscia, bombette e spiedini',
                'prezzo' => 7.99,
                'is_visible' => true,
                'image' => 'carne.jpg',
                'restaurant_id' => 8,
            ],
            [
                'nome' => 'Risotto ai Funghi',
                'descrizione' => 'Piatto italiano con riso, funghi porcini e formaggio parmigiano.',
                'ingredienti' => 'Riso, funghi porcini, formaggio parmigiano',
                'prezzo' => 35.99,
                'is_visible' => true,
                'image' => 'Risotto-ai-funghi.jpg',
                'restaurant_id' => 8,
            ],
        ];

        // Inserisce prodotti nell'array multidimensionale
        Product::insert($products);
    }
}
