<?php

namespace Domain\Shared\DTO\Test;

use Domain\Shared\Validation\ValidationError;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Validation\ValidationContext;

class TestData extends Data
{
    use ValidationError;

    public function __construct(
        public readonly string $message,
    )
    {
    }

    public static function rules(ValidationContext $context): array
    {
        return [
            'message'=>'required|string'
        ];
    }

}
