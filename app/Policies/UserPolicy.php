<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->email == 'admin@example.com';
    }


    /**
     * Determine whether the user can edit the model.
     */
    public function edit(User $user, User $model): bool
    {
        return (bool) mt_rand(0, 1);
    }

    public function update(User $user): bool
    {
        return $user->email == 'admin@example.com';
    }

}
