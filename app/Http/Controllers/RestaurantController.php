<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $data=$request->all();

        $data = $request->validate(
            $this->getValidations(),
            $this->getValidationMessages()
        );

        $userId = Auth::user()->id;
        $data['user_id'] = $userId;


        if(array_key_exists('image', $data)){
            $img_path = Storage::put('uploads', $data['image']);
            $data['image'] = $img_path;
        }
        else{
            $data['image'] = 'main-image.jpg';
        }


        $restaurant = Restaurant::create($data);

        // dd($restaurant);
        // Se sono state indicate tipologie nella checkbox allora le collego tabella ponte
        if (array_key_exists('typology', $data))
            $restaurant->typologies()->attach($data['typology']);
        // return redirect()->route('dashboard', $restaurant->id);
        return view('dashboard');
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



    // FRONT END

    public function indexFE()
    {
        $restaurants = Restaurant::all();

        return response()->json([
            "restaurants" => $restaurants
        ]);
    }

    public function showFE($id)
    {
        $restaurant = Restaurant::with('typologies')->findOrFail($id);


        return response()->json([
            "restaurant" => $restaurant
        ]);

    }

    private function getValidations()
    {
        // Definizione delle regole di validazione per i dati del piatto
        return [
            'nome' => ['required', 'min:2', 'max:64'],
            'indirizzo' => ['max:1275'],
            'partita_iva' => ['required', 'numeric', 'min:0'],
            // 'image' => ['image', 'mimes:jpeg,png,jpg'],
            // 'tipologia' => ['required']
        ];
    }

    private function getValidationMessages()
    {
        // Definizione dei messaggi di errore personalizzati per le regole di validazione
        return [
            'nome.required' => 'Il nome del piatto è obbligatorio.',
            'nome.min' => 'Il nome del piatto deve essere lungo almeno 2 caratteri.',
            'nome.max' => 'Il nome del piatto non può superare i 64 caratteri.',
            'indirizzo.max' => 'l\' indirizzo non può superare i 64 caratteri.',
            'partita_iva.required' => 'La partita iva del ristorante è obbligatorio.',
            'partita_iva.numeric' => 'La partita iva del ristorante deve essere un numero.',
            'partita_iva.min' => 'La partita iva del ristorante non può essere negativo.',
            'image.required' => 'E\' obbligatorio inserite un\'immagine.',
            'image.image' => 'Il file deve essere un\'immagine valida.',
            'image.mimes' => 'Il file immagine deve essere di tipo JPEG, PNG o JPG.',
            'tipologia.required' => 'Il ristorante deve avere una o piu\' tipologie'
        ];
    }

}
