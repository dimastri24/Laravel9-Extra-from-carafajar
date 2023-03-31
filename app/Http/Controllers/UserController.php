<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store()
    {
        User::create([
            'nameasdsadasd' => 'user 2',
            'email' => 'user2@email.com',
            'password' => '1234'
        ]);
    }
}
