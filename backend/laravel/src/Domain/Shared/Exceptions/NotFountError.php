<?php

namespace Domain\Shared\Exceptions;

class NotFountError extends ApiException
{
    public function __construct($code = 404, $message = 'Страница не найдена.')
    {
        parent::__construct($code, $message);
    }
}
