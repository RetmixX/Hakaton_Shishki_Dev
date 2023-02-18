<?php

namespace Domain\Shared\Policies;

use Domain\Shared\Models\Actor\HR as HRModel;
use Domain\Shared\Models\Actor\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HRPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->hasRole('HR');
    }

    public function view(User $user, HRModel $HR): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, HRModel $HR): bool
    {
    }

    public function delete(User $user, HRModel $HR): bool
    {
    }

    public function restore(User $user, HRModel $HR): bool
    {
    }

    public function forceDelete(User $user, HRModel $HR): bool
    {
    }
}
