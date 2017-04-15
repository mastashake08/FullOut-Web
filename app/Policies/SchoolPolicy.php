<?php

namespace App\Policies;

use App\User;
use App\school;
use Illuminate\Auth\Access\HandlesAuthorization;

class SchoolPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the school.
     *
     * @param  \App\User  $user
     * @param  \App\school  $school
     * @return mixed
     */
    public function view(User $user, school $school)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can create schools.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user->type === 'coach';
    }

    /**
     * Determine whether the user can update the school.
     *
     * @param  \App\User  $user
     * @param  \App\school  $school
     * @return mixed
     */
    public function update(User $user, school $school)
    {
        //
        return $school->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the school.
     *
     * @param  \App\User  $user
     * @param  \App\school  $school
     * @return mixed
     */
    public function delete(User $user, school $school)
    {
        //
        return $school->user_id === $user->id;
    }
}
