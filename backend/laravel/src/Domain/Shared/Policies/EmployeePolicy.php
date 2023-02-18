<?php

namespace Domain\Shared\Policies;

use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\Actor\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmployeePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return false;
    }

    public function view(User $user, Employee $employee): bool
    {
        return false;
    }

    public function create(User $user): bool
    {
        return $user->hasRole('HR');
    }

    public function update(User $user, Employee $employee): bool
    {
        return false;
    }

    public function delete(User $user, Employee $employee): bool
    {
        return false;
    }

    public function restore(User $user, Employee $employee): bool
    {
    }

    public function forceDelete(User $user, Employee $employee): bool
    {
    }
}
