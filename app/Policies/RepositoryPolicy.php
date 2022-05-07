<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Repository;
use Illuminate\Auth\Access\HandlesAuthorization;

class RepositoryPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the given repository can be handle by the user.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Repository  $repository
     * @return bool
     */
    public function handle(User $user, Repository $repository)
    {
        return $user->id === $repository->user_id;
    }
}
