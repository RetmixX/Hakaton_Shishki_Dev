<?php

namespace Domain\Shared\ViewModels\User;

use Domain\Shared\Models\Actor\User;
use Domain\Shared\ViewModels\ViewModel;
use Illuminate\Support\Collection;
use Laravel\Sanctum\NewAccessToken;

class LoginViewModel extends ViewModel
{
    public function __construct(
        public readonly NewAccessToken $token,
        public readonly User $user
    ) {
    }

    public function token(): string
    {
        return $this->token->plainTextToken;
    }

    public function role():string
    {
        return $this->user->getRoleNames()->get(0);
    }
}
