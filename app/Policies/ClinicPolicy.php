<?php

namespace App\Policies;

use App\User;
use App\Clinic;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClinicPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the clinic.
     *
     * @param  \App\User  $user
     * @param  \App\Clinic  $clinic
     * @return mixed
     */
    public function view(User $user, Clinic $clinic)
    {
        //
    }

    /**
     * Determine whether the user can create clinics.
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
     * Determine whether the user can update the clinic.
     *
     * @param  \App\User  $user
     * @param  \App\Clinic  $clinic
     * @return mixed
     */
    public function update(User $user, Clinic $clinic)
    {
        //
        return $clinic->school->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the clinic.
     *
     * @param  \App\User  $user
     * @param  \App\Clinic  $clinic
     * @return mixed
     */
    public function delete(User $user, Clinic $clinic)
    {
        //
        return $clinic->school->user_id === $user->id;
    }
}
