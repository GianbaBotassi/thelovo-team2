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

    // --------------------------------- BACK-END --------------------------------

    public function indexBE()
    {
        return view('home');
    }

    public function createBE()
    {
        $typologies = Typology::all();

        return view('pages.restaurant.create-restaurant', compact('typologies'));
    }

    public function storeBE(Request $request)
    {
        $data = $request->all();
        //    dd($data['typology']);
        $data = $request->validate(
            $this->getValidations(),
            $this->getValidationMessages()
        );

        $userId = Auth::user()->id;
        $data['user_id'] = $userId;


        if (array_key_exists('image', $data)) {
            $img_path = Storage::put('uploads', $data['image']);
            $data['image'] = $img_path;
        } else {
            $data['image'] = 'main-image.jpg';
        }

        $restaurant = Restaurant::create($data);

        // Se sono state indicate tipologie nella checkbox allora le collego tabella ponte
        if (array_key_exists('typology', $data))
            $restaurant->typologies()->attach($data['typology']);
        return view('dashboard');
    }

    private function getValidations()
    {
        // Definizione delle regole di validazione per i dati del piatto
        return [
            'nome' => ['required', 'min:2', 'max:64'],
            'indirizzo' => ['max:1275'],
            'partita_iva' => ['required', 'numeric', 'digits:11'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg'],
            'typology' => ['required']
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
            'typology.required' => 'Il ristorante deve avere una o piu\' tipologie'
        ];
    }

    public function statistics()
    {



        return view('pages.restaurant.statistics');
    }

    // ---------------------------------- FRONT-END ----------------------------------

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
}
