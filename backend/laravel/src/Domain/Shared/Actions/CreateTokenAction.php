<?php

namespace Domain\Shared\Actions;

use Domain\Shared\DTO\User\LoginData;
use Domain\Shared\Exceptions\User\LoginFailedError;
use Domain\Shared\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\NewAccessToken;

class CreateTokenAction
{
    public static function execute(LoginData $data): NewAccessToken
    {
        $user = UserRepository::findUserByEmail($data->email);
        throw_unless(Hash::check($data->password, $user->password), LoginFailedError::class);

        return $user->createToken(rand());
    }
}

