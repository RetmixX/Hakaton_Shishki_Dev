<?php

namespace Domain\Shared\Exceptions\User;

use Domain\Shared\Exceptions\ApiException;

class LoginFailedError extends ApiException
{
    public function __construct($code = 401, $message = 'Неверный логин или пароль.')
    {
        parent::__construct($code, $message);
    }
}
