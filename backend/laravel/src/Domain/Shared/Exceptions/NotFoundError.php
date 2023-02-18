<?php

namespace Domain\Shared\Exceptions;

class NotFoundError extends ApiException
{
    public function __construct($code = 404, $message = 'Страница не найдена.')
    {
        parent::__construct($code, $message);
    }
}
