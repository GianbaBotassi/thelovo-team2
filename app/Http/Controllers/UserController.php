<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {

        $data = $request -> all();
        // $userId = User :: user()->id;
        // $data ['user_id'] = $userId;
        $user = User::create($data);

        return response() -> json([
            'user_id' => $user -> id
        ]);

    }
}
