<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show(int $id, string $name)
    {
        return view('kasir.user.index', [
            'id'   => $id,
            'name' => $name,
        ]);
    }
}
