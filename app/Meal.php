<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = ['name', 'day'];

    /**
     * Get the user that owns the meal
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
