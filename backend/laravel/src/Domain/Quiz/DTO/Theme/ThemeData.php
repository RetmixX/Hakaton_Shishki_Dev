<?php

namespace Domain\Quiz\DTO\Theme;

use Domain\Quiz\Enums\PassingStatusTheme;
use Domain\Quiz\Models\Theme\Theme;
use Domain\Shared\Models\Actor\Employee;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Lazy;

class ThemeData extends Data
{
    public function __construct(
        public readonly int $id,
        public readonly string $title,
        public readonly string $description,

        public readonly null|Lazy|PassingStatusTheme $status,
    ) {
    }

    public static function fromModel(Theme $theme)
    {
        return self::from([
            'id' => $theme->id,
            'title' => $theme->title,
            'description' => $theme->description
        ]);
    }

    public static function fromModels(Theme $theme, Employee $employee)
    {
        return self::from([
            'id' => $theme->id,
            'title' => $theme->title,
            'description' => $theme->description,
            'status' => Lazy::create(function () use($theme, $employee){
                if ($employee->last_theme_id>$theme->id){
                    return PassingStatusTheme::Passed;
                }

                if ($employee->last_theme_id == $theme->id){
                    return PassingStatusTheme::InProcess;
                }

                return PassingStatusTheme::NotPassed;
            })
        ]);
    }

}
