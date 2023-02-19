<?php

namespace Domain\Quiz\ViewModel;

use Domain\Quiz\DTO\Theme\ThemeData;
use Domain\Quiz\Models\Theme\Theme;
use Domain\Quiz\Repository\ThemeRepository;
use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\ViewModels\ViewModel;
use Illuminate\Support\Collection;

class ThemeEmployeeViewModel extends ViewModel
{
    public function __construct(public readonly Employee $employee)
    {
    }

    public function themesEmployee():Collection{
        $themesEmployee = collect();

        ThemeRepository::getAll()
            ->each(fn(Theme $theme)=>$themesEmployee->push(ThemeData::fromModels($theme, $this->employee)
                ->include('status')));

        return $themesEmployee;
    }

}
