<?php

namespace Database\Seeders;

use App\Models\Workout;
use App\Models\Exercise;
use Illuminate\Database\Seeder;

class WorkoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exercises = [
            ['name' => 'Pushups'],
            ['name' => 'Situps'],
            ['name' => 'Squats'],
            ['name' => 'Lunges'],
            ['name' => 'Jumping Jacks'],
            ['name' => 'Backups'],
            ['name' => 'Mountain Climbs'],
        ];

        foreach ($exercises as $exercise) {
            Exercise::create($exercise);
        }

        $workouts = [
            [
                'name' => 'Morning Routine',
                'slug' => 'morning-routine',
                'difficulty' => 'hard',
                'description' => 'A set of exercises for a refreshing morning',
                'exercises' => [
                    ['name' => 'Pushups', 'description' => '1 Menit', 'duration' => 10],
                    ['name' => 'Situps', 'description' => '20', 'duration' => 10],
                    ['name' => 'Jumping Jacks', 'description' => '1 Menit', 'duration' => 10],
                    ['name' => 'Backups', 'description' => '1 Menit', 'duration' => 10],
                    ['name' => 'Mountain Climbs', 'description' => '1 Menit', 'duration' => 10],
                ],
            ],
            [
                'name' => 'Full Body Workout',
                'slug' => 'full-body-workout',
                'difficulty' => 'easy',
                'description' => 'Workout for complete body fitness',
                'exercises' => [
                    ['name' => 'Squats', 'description' => '15 Repetisi', 'duration' => 60],
                    ['name' => 'Lunges', 'description' => '10 Repetisi', 'duration' => 60],
                ],
            ],
            // Add more workouts as needed
        ];

        foreach ($workouts as $workoutData) {
            $workout = Workout::create([
                'name' => $workoutData['name'],
                'slug' => $workoutData['slug'],
                'difficulty' => $workoutData['difficulty'],
                'description' => $workoutData['description'],
            ]);

            foreach ($workoutData['exercises'] as $exerciseData) {
                $exercise = Exercise::firstOrCreate(['name' => $exerciseData['name']]);
                $workout->exercises()->attach($exercise->id, ['description' => $exerciseData['description'], 'duration' => $exerciseData['duration']]);
            }
        }
    }
}
