<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\ExerciseUser;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreExerciseUserRequest;
use App\Http\Requests\UpdateExerciseUserRequest;

class ExerciseUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function store(StoreExerciseUserRequest $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(ExerciseUser $exerciseUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExerciseUser $exerciseUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExerciseUserRequest $request, ExerciseUser $exerciseUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExerciseUser $exerciseUser)
    {
        //
    }
}
