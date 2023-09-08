<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $order = new Order();

        $order -> nome = "Giovanni Locorotondo";
        $order -> indirizzo = "Via San Girolamo n 23";
        $order -> telefono = "3345634211";
        $order -> email = "giovannoloco@mail.com";
        $order -> note = "sono allergico ai frutti di bosco";
        $order -> status = "consegnato";
        $order -> data = "2023-04-12";
        $order -> totale = 23.00;

        $order -> save();

             // Array con relazione tra ristorante(key) e tipologie (value)
             $relations = [
                1 => [1, 3, 16],

            ];

            // Ciclo le chiavi e i valori inserendo per ogni relazione una row nella tabella ponte restaurant-typology
            foreach ($relations as $orderId => $productId) {
                $order = Order::find($orderId);

                $order->products()->attach($productId);
            }
    }
}
