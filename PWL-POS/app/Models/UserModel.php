<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    // Praktikum 1: kolom yang boleh di-mass assign
    protected $fillable = [
        'level_id',
        'username',
        'nama',
        'password',
    ];

    // Praktikum 1: contoh guarded (kolom ini diabaikan jika di-mass assign)
    protected $guarded = [
        'user_id',
    ];
}
