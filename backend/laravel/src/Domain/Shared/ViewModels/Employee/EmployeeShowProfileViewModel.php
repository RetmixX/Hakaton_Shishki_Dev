<?php

namespace Domain\Shared\ViewModels\Employee;

use Domain\Shared\Models\Actor\User;

class EmployeeShowProfileViewModel extends \Domain\Shared\ViewModels\ViewModel
{
    public function __construct(public readonly User $user)
    {
    }



}
