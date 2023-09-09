<?php

namespace App\Http\Controllers;


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

       // get all students with names which starts with 'g'
        // $students = Student :: where('name', 'like', 'g%')
        //             // order by date of birth descendent
        //             -> orderBy('date_of_birth', 'desc')
        //             // limit max number of resulting students (10)
        //             -> limit(10)
        //             -> get();
    public function indexBE()
    {

        $id=Auth::user()->id;

        // prendi tutti gli ordini insieme hai prodotti,
        // fai un confronto tra i restauyrat_id e l'id passato dall'utente autenticato
        // prendi solo e unicamente quelli che hanno il restaurant_id
        // uguale all'id dello user autenticato
        $orders = Order::with('products')
        ->whereHas('products', function ($query) use ($id) {
            $query->where('restaurant_id', $id);
        })
        -> orderBy('created_at', 'desc')
        ->get();

        return view('pages.orders.index', compact('orders'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBE()
    {

        return view('pages.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBE(Request $request)
    {
        $data=$request->all();
        $order = Order::create($data);
        // Aggiungere a $data questi cambi che non insersce l'utente
        // "status",
        // "data",
        // "totale"

        // Se sono state indicate tipologie nella checkbox allora le collego tabella ponte
        if (array_key_exists('product', $data))
            $order->typologies()->attach($data['product']);
        $order=Order::create($data);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBE($id)
    {
        $order=Order::findOrFail($id);
        return view('pages.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editBE($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateBE(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyBE($id)
    {
        //
    }
}
