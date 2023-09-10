<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typology;

class TypologyController extends Controller
{
    public function indexFE()
    {
        $typologies = Typology::all();

        return response()->json([
            "typologies" => $typologies
        ]);
    }
}
