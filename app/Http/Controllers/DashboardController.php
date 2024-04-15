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
        
        $pushups = $user->exercises()->where('name', 'Push-up')->sum('reps');
        $pullups = $user->exercises()->where('name', 'Pull-up')->sum('reps');
        $squats = $user->exercises()->where('name', 'Squat')->sum('reps');
        $totalReps = $pushups + $pullups + $squats;

        return view('dashboard', [
            'pushups' => $pushups,
            'pullups' => $pullups,
            'squats' => $squats,
            'totalReps' => $totalReps
        ]);
    }   
}
