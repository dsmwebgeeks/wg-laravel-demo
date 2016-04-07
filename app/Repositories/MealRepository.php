<?php

namespace App\Repositories;

use App\User;
use App\Meal;

class MealRepository {

    public function forUser(User $user) {
        return Meal::where('user_id', $user->id)
                          ->orderBy('day', 'asc')
                          ->get();
    }
}
