<?php

namespace Domain\Shared\Exceptions;

class ValidationFailed extends ApiException
{
    public function __construct($code = 422, $message = 'Ошибка валидации', $errors = [])
    {
        parent::__construct($code, $message, $errors);
    }
}
