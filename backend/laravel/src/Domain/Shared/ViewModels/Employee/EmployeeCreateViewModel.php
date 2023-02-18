<?php

namespace Domain\Shared\ViewModels\Employee;

class EmployeeCreateViewModel extends \Domain\Shared\ViewModels\ViewModel
{
    public function __construct()
    {
    }

    public function message():string{
        return 'Сотрудник был успешно создан.';
    }
}
