<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile(int $id, string $name)
    {
        return view('user', [
            'id' => $id,
            'name' => $name,
        ]);
    }

    // Jobsheet 04 - Praktikum 1 ($fillable / $guarded)
    public function praktikumFillable()
    {
        $data = [
            'level_id' => 1,
            'username' => 'user' . now()->format('His'),
            'nama' => 'User Praktikum',
            'password' => Hash::make('password'),
        ];

        UserModel::create($data);

        return view('user-praktikum', [
            'title' => 'Praktikum 1 - Fillable/Guarded',
            'latestUsers' => UserModel::query()->latest('user_id')->take(5)->get(),
            'singleData' => null,
            'methodName' => 'create() dengan $fillable',
        ]);
    }

    // Jobsheet 04 - Praktikum 2.1 (Retrieving Single Models)
    public function praktikumSingleModel()
    {
        $findData = UserModel::find(1);                  // by primary key
        $firstData = UserModel::first();                 // first row
        $firstWhereData = UserModel::firstWhere('level_id', 1); // first by condition

        return view('user-praktikum', [
            'title' => 'Praktikum 2.1 - Retrieving Single Models',
            'latestUsers' => UserModel::query()->latest('user_id')->take(5)->get(),
            'singleData' => [
                'find' => $findData,
                'first' => $firstData,
                'firstWhere' => $firstWhereData,
            ],
            'methodName' => 'find(), first(), firstWhere()',
        ]);
    }
}
