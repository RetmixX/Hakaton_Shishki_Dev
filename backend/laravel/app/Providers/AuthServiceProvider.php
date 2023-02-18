<?php

namespace App\Providers;

use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\Actor\HR;
use Domain\Shared\Policies\EmployeePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Employee::class => EmployeePolicy::class,
        HR::class => \Domain\Shared\Policies\HRPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
