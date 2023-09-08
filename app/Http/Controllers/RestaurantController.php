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
    public function indexBE()
    {
        $restaurants = Restaurant::all();

        return view('home', compact('restaurants'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBE($id)
    {
        $restaurant = Restaurant::with('typologies')->findOrFail($id);


        return view('pages.restaurant.restaurant', compact('restaurant'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createBE()
    {
        $typologies = Typology::all();

        return view('pages.restaurant.create-restaurant', compact('typologies'));
    }

    public function storeBE(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $userId = Auth::user()->id;

        $data['restaurant_id'] = $userId;

        $restaurant = Restaurant::create($data);

        // Se sono state indicate tipologie nella checkbox allora le collego tabella ponte
        if (array_key_exists('typology', $data))
            $restaurant->typologies()->attach($data['typology']);

        // $restaurant->user()->attach();
        return redirect()->route('dashboard', $restaurant->id);
    }







    //  DA RIFINIRE CAPIRE COME FARLA FUNZIONARE

    // public function createBE($id)
    // {
    //     $user = User::findOrFail($id);

    //     // Crea json tutti i ristoranti
    //     return response()->json([
    //         "user" => $user
    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  DA RIFINIRE CAPIRE COME FARLA FUNZIONARE
    // public function storeBE(Request $request, $id)
    // {

    //     // QUESTA è PER
    //     // $data = $request->validate(
    //     //     $this->getValidations(),
    //     //     $this->getValidationMessages(),
    //     // );
    //     // $userId = Auth::user()->id;

    //     $data = $request->all();
    //     $data['user_id'] = $id;

    //     $restaurant = Restaurant::create($data);
    //     // return response()->json([
    //     //     "user" => $user
    //     // ]);

    // }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editBE($id)
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
