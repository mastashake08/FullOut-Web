<?php

namespace App\Policies;

use App\User;
use App\Skill;
use Illuminate\Auth\Access\HandlesAuthorization;

class SkillPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the skill.
     *
     * @param  \App\User  $user
     * @param  \App\Skill  $skill
     * @return mixed
     */
    public function view(User $user, Skill $skill)
    {
        //
    }

    /**
     * Determine whether the user can create skills.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user->type === 'student';
    }

    /**
     * Determine whether the user can update the skill.
     *
     * @param  \App\User  $user
     * @param  \App\Skill  $skill
     * @return mixed
     */
    public function update(User $user, Skill $skill)
    {
        //
        return $user->id === $skill->user_id;
    }

    /**
     * Determine whether the user can delete the skill.
     *
     * @param  \App\User  $user
     * @param  \App\Skill  $skill
     * @return mixed
     */
    public function delete(User $user, Skill $skill)
    {
        //
        return $user->id === $skill->user_id;
    }
}
