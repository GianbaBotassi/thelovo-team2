<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();

        // Crea json tutti i ristoranti
        return response()->json([
            "users" => $users
        ]);
    }
    public function store(Request $request)
    {

        $data = $request -> all();

        $data ['password'] = bcrypt($data ['password']);
        $user = User::create($data);

    }
}
