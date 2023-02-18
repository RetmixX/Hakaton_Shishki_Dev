<?php

namespace Domain\Quiz\DTO\Theme;

use Domain\Quiz\Models\Theme\Theme;
use Spatie\LaravelData\Data;

class ThemeEmployeeProfileData extends Data
{
    public function __construct(
        public readonly int $id,
        public readonly string $title,
        public readonly string $description,
    )
    {
    }

    public static function fromModel(Theme $theme){
        return self::from([
            'id'=>$theme->id,
            'title' => $theme->title,
            'description' => $theme->description
        ]);
    }

}
