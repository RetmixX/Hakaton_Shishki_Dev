<?php

namespace Domain\Shared\Exceptions\User;

use Domain\Shared\Exceptions\ApiException;

class NotAuthorizedError extends ApiException
{
    public function __construct($code = 401, $message = 'Неавторизирован.')
    {
        parent::__construct($code, $message);
    }
}
