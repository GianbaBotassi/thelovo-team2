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

    public function create($id)
    {
        $user= User::findOrFail($id);

        // Crea json tutti i ristoranti
        return response()->json([
            "user" => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  DA RIFINIRE CAPIRE COME FARLA FUNZIONARE
    public function store(Request $request, $id)
    {

    // QUESTA è PER
        // $data = $request->validate(
        //     $this->getValidations(),
        //     $this->getValidationMessages(),
        // );
        // $userId = Auth::user()->id;

        $data = $request -> all();
        $data['user_id'] = $id;

        $restaurant = Restaurant::create($data);
        // return response()->json([
        //     "user" => $user
        // ]);

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
