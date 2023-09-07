<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant;
use App\Models\User;
use App\Models\Typology;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $restaurants = Restaurant::all();

        // Crea json tutti i ristoranti
        return response()->json([
            "restaurants" => $restaurants
        ]);
    }

       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = Restaurant::with('typology')->findOrFail($id);

        return response()->json([
            "restaurant" => $restaurant
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //  DA RIFINIRE CAPIRE COME FARLA FUNZIONARE

    public function create()
    {
        // header("Access-Control-Allow-Origin: http://localhost:5173");
        // header("Access-Control-Allow-Headers: X-Requested-With");
        // header('Content-Type: application/json');

        // return response()->json([
        //     "restaurants" => $restaurants
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  DA RIFINIRE CAPIRE COME FARLA FUNZIONARE
    public function store(Request $request)
    {

        $data = $request -> all();
        // $userId = User :: user()->id;
        // $data ['user_id'] = $userId;
        $restaurant = Restaurant::create($data);

        return response() -> json([
            'restaurant_id' => $restaurant -> id
        ]);

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
