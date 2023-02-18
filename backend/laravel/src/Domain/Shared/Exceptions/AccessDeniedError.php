<?php

namespace Domain\Shared\Exceptions;

class AccessDeniedError extends ApiException
{
    public function __construct($code = 403, $message = 'Вы не имеете привелегий для совершения данного действия')
    {
        parent::__construct($code, $message);
    }
}
