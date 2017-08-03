<?php

namespace App\Policies;

use App\User;
use App\Tryout;
use Illuminate\Auth\Access\HandlesAuthorization;

class TryoutPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the tryout.
     *
     * @param  \App\User  $user
     * @param  \App\Tryout  $tryout
     * @return mixed
     */
    public function view(User $user, Tryout $tryout)
    {
        //
    }

    /**
     * Determine whether the user can create tryouts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user->type === "coach";
    }

    /**
     * Determine whether the user can update the tryout.
     *
     * @param  \App\User  $user
     * @param  \App\Tryout  $tryout
     * @return mixed
     */
    public function update(User $user, Tryout $tryout)
    {
        //
        return $user->school->id === $tryout->school_id;
    }

    /**
     * Determine whether the user can delete the tryout.
     *
     * @param  \App\User  $user
     * @param  \App\Tryout  $tryout
     * @return mixed
     */
    public function delete(User $user, Tryout $tryout)
    {
        //
        return $user->school->id === $tryout->school_id;
    }
}
