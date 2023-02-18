<?php

namespace Domain\Shared\DTO\Employee;

use Domain\Shared\Validation\ValidationError;
use Illuminate\Http\Request;
use Spatie\LaravelData\Data;

class EmployeeDataCreate extends Data
{
    use ValidationError;

    public function __construct(
        public readonly string $email,
        public readonly string $firstName,
        public readonly string $middleName,
        public readonly ?string $lastName,
        public readonly string $startWork,
        public readonly int $divisionId,
        public readonly int $rangId,
        public readonly int $mentorId,
    )
    {
    }

    public static function fromRequest(Request $request):self{
        return self::from([
            ...$request->all()
        ]);
    }

    public static function rules(): array{
        return [
            'email'=>'required|unique:users,email|string|email',
            'firstName'=>'required|string',
            'middleName'=>'required|string',
            'lastName'=>'string',
            'divisionId'=>'required|int|exists:divisions,id',
            'rangId'=>'required|int|exists:ranges,id',
            'mentorId'=>'required|int|exists:mentors,id',
            'startWork'=>'required|date'
        ];
    }
}
