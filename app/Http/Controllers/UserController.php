<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store()
    {
        $user1 = User::create([
            'name' => 'user 3',
            'email' => 'user3@email.com',
            'password' => '1234'
        ]);

        // cara tidak clean code
        // ActivityLog::create([
        //     'description' => 'create user ' . $user1->name,
        // ]);
    }
}
