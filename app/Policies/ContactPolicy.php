<?php

declare(strict_types = 1);

namespace App\Policies;

use App\Models\{Contact, User};
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Contact $contact): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Contact $contact): bool
    {
    }

    public function delete(User $user, Contact $contact): bool
    {
    }

    public function restore(User $user, Contact $contact): bool
    {
    }

    public function forceDelete(User $user, Contact $contact): bool
    {
    }
}
