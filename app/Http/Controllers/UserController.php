<?php

namespace App\Http\Controllers;

use App\Events\UserCreated;
use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store()
    {
        $user = User::create([
            'name' => 'user 2',
            'email' => 'user2@email.com',
            'password' => '1234'
        ]);

        UserCreated::dispatch($user);
    }
}
