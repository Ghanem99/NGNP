<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::create([
            'name' => 'Push-up'
        ]);

        Exercise::create([
            'name' => 'Pull-up'
        ]);

        Exercise::create([
            'name' => 'Squat'
        ]);
        
    }
}
