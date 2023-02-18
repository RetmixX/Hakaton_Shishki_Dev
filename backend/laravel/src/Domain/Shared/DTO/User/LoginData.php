<?php

namespace Domain\Shared\DTO\User;

use Domain\Shared\Validation\ValidationError;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Validation\ValidationContext;

class LoginData extends Data
{
    use ValidationError;

    public function __construct(
        public readonly string $email,
        public readonly string $password,
    )
    {
    }

    public static function rules(): array
    {
        return [
            'email'=>'required',
            'password'=>'required'
        ];
    }

    public static function attributes(...$args): array
    {
        return [
            'email'=>'почта',
            'password'=>'пароль'
        ];
    }


}
