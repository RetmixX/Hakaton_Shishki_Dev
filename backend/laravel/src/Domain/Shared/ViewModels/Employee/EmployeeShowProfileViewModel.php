<?php

namespace Domain\Shared\ViewModels\Employee;

use Domain\Quiz\DTO\Theme\ThemeEmployeeProfileData;
use Domain\Shared\DTO\Employee\EmployeeProfileData;
use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\Actor\User;
use Domain\Shared\ViewModels\ViewModel;

class EmployeeShowProfileViewModel extends ViewModel
{
    public function __construct(public readonly Employee $employee)
    {
    }

    public function employee(): EmployeeProfileData
    {
        return EmployeeProfileData::from($this->employee)->include('lvl', 'exp');
    }

    public function theme(): ThemeEmployeeProfileData|null
    {
        return !empty($this->employee->theme) ?
            ThemeEmployeeProfileData::from($this->employee->theme): null;
    }


}
