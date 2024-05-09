<?php

namespace Database\Seeders;

use App\Models\Workout;
use App\Models\Exercise;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorkoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $exercises = [
            [
                'name' => 'Pushups',
            ],
            [
                'name' => 'Situps',
            ],
            [
                'name' => 'Squats',
            ],
            [
                'name' => 'Lunges',
            ],
            [
                'name' => 'Jumping Jacks',
            ],
            [
                'name' => 'Backups',
            ],
            [
                'name' => 'Mountain Climbs',
            ],
        ];

        foreach ($exercises as $exercise) {
            Exercise::create($exercise);
        }

        $workouts = [
            [
                'name' => 'Morning Routine',
                'slug' => 'morning-routine',
                'description' => 'A set of exercises for a refreshing morning',
                'exercises' => [
                    ['name' => 'Pushups', 'repetitions' => 20],
                    ['name' => 'Situps', 'repetitions' => 20],
                    ['name' => 'Jumping Jacks', 'repetitions' => 20],
                    ['name' => 'Backups', 'repetitions' => 20],
                    ['name' => 'Mountain Climbs', 'repetitions' => 20],
                    ['name' => 'Situps', 'repetitions' => 40],
                ],
            ],
            [
                'name' => 'Full Body Workout',
                'slug' => 'full-body-workout',
                'description' => 'Workout for complete body fitness',
                'exercises' => [
                    ['name' => 'Squats', 'repetitions' => 15],
                    ['name' => 'Lunges', 'repetitions' => 10],
                ],
            ],
            // Add more workouts as needed
        ];

        foreach ($workouts as $workoutData) {
            $workout = Workout::create([
                'name' => $workoutData['name'],
                'slug' => $workoutData['slug'],
                'description' => $workoutData['description'],
            ]);

            foreach ($workoutData['exercises'] as $exerciseData) {
                $exercise = Exercise::firstOrCreate(['name' => $exerciseData['name']]);
                $workout->exercises()->attach($exercise->id, ['repetitions' => $exerciseData['repetitions']]);
            }
        }
    }
}
