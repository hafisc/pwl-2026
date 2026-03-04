<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function profile(int $id, string $name)
    {
        return view('user', [
            'id' => $id,
            'name' => $name,
        ]);
    }
}
