<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Zodiac;
use Illuminate\Auth\Access\HandlesAuthorization;

class ZodiacPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Zodiac  $zodiac
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Zodiac $zodiac)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Zodiac  $zodiac
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Zodiac $zodiac)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Zodiac  $zodiac
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Zodiac $zodiac)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Zodiac  $zodiac
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Zodiac $zodiac)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Zodiac  $zodiac
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Zodiac $zodiac)
    {
        //
    }
}
