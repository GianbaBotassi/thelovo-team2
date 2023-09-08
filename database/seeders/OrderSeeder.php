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

        // Array tipologie
        $orders = [
            [
                'nome' => 'Luigi Rossi',
                'indirizzo' => 'Via dei camosci, 2',
                'telefono' => '3332330645',
                'email' => 'luigi.r@gmail.com',
                'note' => 'Suonare al terzo campanello',
                'status' => 'Consegnato',
                'data' => '2023-09-21',
                'totale' => '120.00'
            ],
            [
                'nome' => 'Maria Bianchi',
                'indirizzo' => 'Via Roma, 14',
                'telefono' => '3335557890',
                'email' => 'maria.b@gmail.com',
                'note' => 'Aggiungere peperoncino extra.',
                'status' => 'In preparazione',
                'data' => '2023-09-25',
                'totale' => '22.00'
            ],
            [
                'nome' => 'Marco Verdi',
                'indirizzo' => 'Via delle Magnolie, 7',
                'telefono' => '3391234567',
                'email' => 'marco.v@gmail.com',
                'note' => 'Nessun avocado nelle roll selezionate.',
                'status' => 'In consegna',
                'data' => '2023-09-26',
                'totale' => '45.00'
            ],
            [
                'nome' => 'Giovanna Russo',
                'indirizzo' => 'Via Venezia, 5',
                'telefono' => '3479876543',
                'email' => 'giovanna.r@gmail.com',
                'note' => 'Consegna urgente, prego.',
                'status' => 'In attesa di conferma',
                'data' => '2023-09-27',
                'totale' => '18.00'
            ],
            [
                'nome' => 'Antonio Martini',
                'indirizzo' => 'Via dei Gelsomini, 12',
                'telefono' => '3342221111',
                'email' => 'antonio.m@gmail.com',
                'note' => 'Senza cipolle, per favore.',
                'status' => 'In preparazione',
                'data' => '2023-09-28',
                'totale' => '30.00'
            ],
            [
                'nome' => 'Paolo Bianchi',
                'indirizzo' => 'Via delle Rose, 10',
                'telefono' => '3334445678',
                'email' => 'paolo.b@gmail.com',
                'note' => 'Chiamare quando si Ã¨ vicino.',
                'status' => 'In preparazione',
                'data' => '2023-09-22',
                'totale' => '28.00'
            ],
            [
                'nome' => 'Anna Russo',
                'indirizzo' => 'Via Garibaldi, 15',
                'telefono' => '3387891234',
                'email' => 'anna.r@gmail.com',
                'note' => 'Aggiungere salsa piccante.',
                'status' => 'In consegna',
                'data' => '2023-09-23',
                'totale' => '35.00'
            ],
            [
                'nome' => 'Michele Ferraro',
                'indirizzo' => 'Via Roma, 5',
                'telefono' => '3339876543',
                'email' => 'michele.f@gmail.com',
                'note' => 'Consegna rapida richiesta.',
                'status' => 'Consegnato',
                'data' => '2023-09-24',
                'totale' => '18.00'
            ],
            [
                'nome' => 'Laura Esposito',
                'indirizzo' => 'Via Napoli, 8',
                'telefono' => '3356789123',
                'email' => 'laura.e@gmail.com',
                'note' => 'Senza cipolle, per favore.',
                'status' => 'In preparazione',
                'data' => '2023-09-25',
                'totale' => '30.00'
            ],
            [
                'nome' => 'Giovanni Martini',
                'indirizzo' => 'Via delle Palme, 12',
                'telefono' => '3342225678',
                'email' => 'giovanni.m@gmail.com',
                'note' => 'Extra formaggio sulla pizza.',
                'status' => 'In attesa di conferma',
                'data' => '2023-09-26',
                'totale' => '26.00'
            ],
            [
                'nome' => 'Giovanni Martini',
                'indirizzo' => 'Via delle Palme, 12',
                'telefono' => '3342225678',
                'email' => 'giovanni.m@gmail.com',
                'note' => 'Extra formaggio sulla pizza.',
                'status' => 'In attesa di conferma',
                'data' => '2023-09-26',
                'totale' => '26.00'
            ]
        ];

        // Inserite tipologie
        Order::insert($orders);


        // Array con relazione tra ristorante(key) e tipologie (value)
        $relations = [
            1 => [1, 3, 16],
            2 => [7, 11],
            3 => [19],
            4 => [5, 14],
            5 => [8, 10],
            6 => [20],
            7 => [6, 13],
            8 => [15],
            9 => [9],
            10 => [4, 17, 18],
            11 => [1]
        ];

        // Ciclo le chiavi e i valori inserendo per ogni relazione una row nella tabella ponte restaurant-typology
        foreach ($relations as $orderId => $productId) {
            $order = Order::find($orderId);
            $quantity = rand(1, 4);

            $order->products()->attach($productId, ['quantity' => $quantity]);
        }
    }
}
