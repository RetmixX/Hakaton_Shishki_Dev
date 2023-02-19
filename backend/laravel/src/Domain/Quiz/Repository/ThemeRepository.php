<?php

namespace Domain\Quiz\Repository;

use Domain\Quiz\Models\Theme\Theme;
use Domain\Shared\Models\Actor\Employee;
use Illuminate\Database\Eloquent\Collection;

class ThemeRepository
{
    public static function getAll(): Collection
    {
        return Theme::all();
    }

    public static function findById(int $id): Theme
    {
        return Theme::findOrFail($id);
    }

    public static function getAvailableThemesForEmployee(Employee $employee): \Illuminate\Support\Collection
    {
        $themes = self::getAll()->pluck('id');
        $availableThemes = collect();

        $themes->each(function (int $idTheme) use ($availableThemes, $employee) {
            if ($idTheme > $employee->last_theme_id) {
                $availableThemes->push(self::findById($idTheme));
            }
        });

        return $availableThemes;
    }
}
