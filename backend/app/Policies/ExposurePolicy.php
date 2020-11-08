<?php

namespace App\Policies;

use App\User;
use App\Exposure;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExposurePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any exposures.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the exposure.
     *
     * @param  \App\User  $user
     * @param  \App\Exposure  $exposure
     * @return mixed
     */
    public function view(User $user, Exposure $exposure)
    {
        return true;
    }

    /**
     * Determine whether the user can create exposures.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the exposure.
     *
     * @param  \App\User  $user
     * @param  \App\Exposure  $exposure
     * @return mixed
     */
    public function update(User $user, Exposure $exposure)
    {
        return $user->id === $exposure->user_id;
    }

    /**
     * Determine whether the user can delete the exposure.
     *
     * @param  \App\User  $user
     * @param  \App\Exposure  $exposure
     * @return mixed
     */
    public function delete(User $user, Exposure $exposure)
    {
        return $user->id === $exposure->user_id;
    }

    /**
     * Determine whether the user can restore the exposure.
     *
     * @param  \App\User  $user
     * @param  \App\Exposure  $exposure
     * @return mixed
     */
    public function restore(User $user, Exposure $exposure)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the exposure.
     *
     * @param  \App\User  $user
     * @param  \App\Exposure  $exposure
     * @return mixed
     */
    public function forceDelete(User $user, Exposure $exposure)
    {
        //
    }
}
