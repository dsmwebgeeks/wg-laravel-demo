<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Meal;

use App\Http\Requests;

use App\Repositories\MealRepository;

class MealController extends Controller
{
    protected $meals;

    public function __construct(MealRepository $meals) {
        $this->meals = $meals;

        $this->middleware('auth');
    }

    public function index(Request $request) {
        $meals = Meal::where('user_id', $request->user()->id)->get();

        return view('meals.index', [
            'meals' => $this->meals->forUser($request->user()),
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
