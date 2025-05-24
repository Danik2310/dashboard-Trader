<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Wallet;

class UserObserver
{
    public function created(User $user)
    {
        // Crea una wallet vacía con balance 0 al crear usuario
        $user->wallet()->create([
            'balance' => 0,
        ]);
    }
}
