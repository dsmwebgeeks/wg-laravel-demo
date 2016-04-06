<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MealController extends Controller
{
    public function __construct() {
        return $this->middleware('auth');
    }
    public function index(Request $request) {
        return view('meals.index');
    }
}
