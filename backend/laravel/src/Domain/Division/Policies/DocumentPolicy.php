<?php

namespace Domain\Division\Policies;

use Domain\Division\Models\Document\Document;
use Domain\Shared\Models\Actor\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocumentPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function viewEmployee(User $user):bool{
        return $user->hasRole('Employee');
    }

    public function viewSupervisor(User $user):bool{
        return $user->hasRole('Supervisor');
    }

    public function view(User $user, Document $document): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Document $document): bool
    {
    }

    public function delete(User $user, Document $document): bool
    {
    }

    public function restore(User $user, Document $document): bool
    {
    }

    public function forceDelete(User $user, Document $document): bool
    {
    }
}
