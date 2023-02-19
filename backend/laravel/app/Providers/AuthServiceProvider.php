<?php

namespace App\Providers;

use Domain\Division\Models\Document\Document;
use Domain\Division\Policies\DocumentPolicy;
use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\Actor\HR;
use Domain\Shared\Policies\EmployeePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Employee::class => EmployeePolicy::class,
        HR::class => \Domain\Shared\Policies\HRPolicy::class,
        Document::class => DocumentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
