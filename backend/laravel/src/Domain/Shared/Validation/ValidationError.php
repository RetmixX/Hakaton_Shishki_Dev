<?php

namespace Domain\Shared\Validation;

use Domain\Shared\Exceptions\ValidationFailed;
use Illuminate\Validation\Validator;

trait ValidationError
{
    public static function withValidator(Validator $validator): void
    {
        if ($validator->fails()) {
            throw new ValidationFailed(422, 'Ошибка валидации', $validator->errors());
        }
    }
}
