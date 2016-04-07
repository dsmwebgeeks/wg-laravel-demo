<?php

namespace App\Policies;

use App\User;
use App\Meal;

use Illuminate\Auth\Access\HandlesAuthorization;

class MealPolicy
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
     * Determine if the given user can destroy a meal
     * @param  User   $user
     * @param  Meal   $meal
     * @return boolean       
     */
    public function destroy(User $user, Meal $meal) {
        return $user->id === $meal->user_id;
    }
}
