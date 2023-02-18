<?php

namespace Domain\Shared\DTO\HR;

use Carbon\Carbon;
use Domain\Shared\Models\Actor\HR;
use Spatie\LaravelData\Data;

class HRProfileData extends Data
{
    public function __construct(
        public readonly int $id,
        public readonly string $firstName,
        public readonly string $middleName,
        public readonly string $startWork,
    )
    {
    }

    public static function fromModel(HR $hr){
        $user = $hr->userable;
        return self::from([
            'id' => $hr->id,
            'firstName' => $user->firstName,
            'middleName' => $user->middleName,
            'startWork' => Carbon::create($user->startWork)->translatedFormat('d F Y'),
        ]);
    }

}
