<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Meal;

use App\Http\Requests;

class MealController extends Controller
{
    public function __construct() {
        return $this->middleware('auth');
    }

    public function index(Request $request) {
        $meals = Meal::where('user_id', $request->user()->id)->get();

        return view('meals.index', [
            'meals' => $meals,
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'day' => 'required|max:255'
        ]);

        $request->user()->meals()->create([
            'name' => $request->name,
            'day' => $request->day,
        ]);

        return redirect('/meals');
    }
}
