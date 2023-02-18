<?php

namespace Domain\Shared\Repositories;

use Domain\Shared\Models\Actor\User;
use Illuminate\Support\Collection;

class UserRepository
{
    public static function getAllUsers(): Collection
    {
        return User::all();
    }

    public static function findUserById(int $id): User
    {
        return User::findOrfail($id);
    }

    public static function findUserByEmail(string $email): User
    {
        return User::where('email', $email)->firstOrFail();
    }


}
