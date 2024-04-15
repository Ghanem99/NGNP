<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreExerciseRequest;
use App\Http\Requests\UpdateExerciseRequest;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $user = Auth::user();
        $exercises = Exercise::all();
        return view('exercise', compact('user', 'exercises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExerciseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercise $exercise)
    {
        //
    }

    public function storeReps(Request $request)
    {
        $request->validate([
            'exercise_id' => 'required|exists:exercises,id',
            'reps' => 'required|integer|min:1',
        ]);

        $user = Auth::user();
        $exercise = Exercise::find($request->exercise_id);
        $reps = $request->reps;

        $user->exercises()->attach($exercise, ['reps' => $reps]);

        return redirect()->route('analytics')->with('success', 'Reps added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exercise $exercise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExerciseRequest $request, Exercise $exercise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercise $exercise)
    {
        //
    }
}
