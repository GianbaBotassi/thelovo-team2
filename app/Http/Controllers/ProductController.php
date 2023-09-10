<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBE()
    {
        $products = Product::all();

        return view('pages.products.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBE()
    {
        return view('pages.products.create');
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

        $data = $request->validate(
            $this->getValidations(),
            $this->getValidationMessages()
        );

        $restaurantId = Auth::user()->restaurant->id;

        if(array_key_exists('image', $data)){
            $img_path = Storage::put('uploads', $data['image']);
            $data['image'] = $img_path;
        }
        else{
            $data['image'] = 'main-image.jpg';
        }


        $data['restaurant_id'] = $restaurantId;

        $product=Product::create([
            "nome"=>$data["nome"],
            "descrizione"=>$data["descrizione"],
            "ingredienti"=>$data["ingredienti"],
            "prezzo"=>$data["prezzo"],
            "is_visible"=>$data["is_visible"],
            "image"=>$data["image"],
            "restaurant_id"=>$data["restaurant_id"],
        ]);

        return view('pages.products.index', compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBE($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editBE($id)
    {
       $product=Product::findOrFail($id);
       return view('pages.products.edit', compact('product'));
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
        $data=$request->all();
        $data = $request->validate(
            $this->getValidations(),
            $this->getValidationMessages()
        );

        $product=Product::findOrFail($id);

        $img_path = Storage::put('uploads', $data['image']);
        $data['image'] = $img_path;

        $product->update($data);

        return view('pages.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyBE($id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        return view('dashboard');
    }

    // FUNZIONI DI VALIDAZIONE

    private function getValidations()
    {
        // Definizione delle regole di validazione per i dati del piatto
        return [
            'nome' => ['required', 'min:2', 'max:64'],
            'descrizione' => ['max:1275'],
            'ingredienti' => ['max:1275'],
            'prezzo' => ['required', 'numeric', 'min:0'],
            'image' => ['image', 'mimes:jpeg,png,jpg'],
            'is_visible' => ['required']
        ];
    }

    private function getValidationMessages()
    {
        // Definizione dei messaggi di errore personalizzati per le regole di validazione
        return [
            'nome.required' => 'Il nome del piatto è obbligatorio.',
            'nome.min' => 'Il nome del piatto deve essere lungo almeno 2 caratteri.',
            'nome.max' => 'Il nome del piatto non può superare i 64 caratteri.',
            'descrizione.max' => 'La descrizione non può superare i 1275 caratteri.',
            'ingredienti.max' => 'La lista di ingrdienti non può superare i 1275 caratteri.',
            'prezzo.required' => 'Il prezzo del piatto è obbligatorio.',
            'prezzo.numeric' => 'Il prezzo del piatto deve essere un numero.',
            'prezzo.min' => 'Il prezzo del piatto non può essere negativo.',
            // 'image.required' => 'L\'immagine è richiesta.',
            'image.image' => 'Il file deve essere un\'immagine valida.',
            'image.mimes' => 'Il file immagine deve essere di tipo JPEG, PNG o JPG.',
            'is_visible.required' => 'La visibilità del piatto è obbligatoria.'
        ];
    }



    // FRONT END

    public function indexFE()
    {
        $products = Product::all();

        return response()->json([
            "products" => $products
        ]);
    }

}
