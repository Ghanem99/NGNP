<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() : View
    {
        $user = Auth::user();

        $exerciseNames = ['Push-up', 'Pull-up', 'Squat'];

        $exerciseReps = [];

        foreach ($exerciseNames as $exerciseName) {
            $exercise = Exercise::where('name', $exerciseName)->first();

            if ($user->exercises->contains($exercise)) {
                $reps = $user->exercises()->where('exercise_id', $exercise->id)->first()->pivot->reps;
                $exerciseReps[$exerciseName] = $reps;
            } else {
                $exerciseReps[$exerciseName] = 0; // Set reps to 0 if user hasn't done this exercise
            }
        }

        // Calculate total reps for all exercises
        $totalReps = array_sum($exerciseReps);

        return view('dashboard', ['exerciseReps' => $exerciseReps, 'totalReps' => $totalReps]);
    }   
}
