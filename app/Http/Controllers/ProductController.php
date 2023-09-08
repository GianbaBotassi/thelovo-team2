<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $restaurantId = Auth::user()->id;

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
        $product=Product::findOrFail($id);
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



    // FRONT END

    public function indexFE()
    {
        $products = Product::all();

        return response()->json([
            "products" => $products
        ]);
    }

}
