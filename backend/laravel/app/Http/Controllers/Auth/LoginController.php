<?php

namespace App\Http\Controllers\Auth;

use Domain\Shared\Actions\CreateTokenAction;
use Domain\Shared\DTO\User\LoginData;
use Domain\Shared\Repositories\UserRepository;
use Domain\Shared\ViewModels\User\LoginViewModel;
use Illuminate\Http\Request;

class LoginController
{
    public function login(LoginData $data, Request $request):LoginViewModel{

        return new LoginViewModel(CreateTokenAction::execute($data), UserRepository::findUserByEmail($data->email));
    }
}
