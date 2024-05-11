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
            ['name' => 'Jogging in place'],
            ['name' => 'Body stretching'],
            ['name' => 'Squat'],
            ['name' => 'Plank'],
            ['name' => 'Sit-up'],
            ['name' => 'Rest'],
            ['name' => 'Deep breathing'],
            ['name' => 'Push-up'],
            ['name' => 'Squat Jump'],
            ['name' => 'Mountain Climber'],
            ['name' => 'Jumping Jack'],
            ['name' => 'Light warm-up exercises'],
            ['name' => 'Burpee'],
            ['name' => 'Glute Bridge'],
            ['name' => 'Elevated Push-up'],
            ['name' => 'Side Plank'],
            ['name' => 'Russian Twist'],
            ['name' => 'Short meditation'],
            ['name' => 'Sun Salutation'],
            ['name' => 'Downward Dog'],
            ['name' => 'Tree Pose'],
            ['name' => 'Savasana'],
            ['name' => 'Bench Press'],
            ['name' => 'Deadlift'],
            ['name' => 'Pull-up'],
            ['name' => 'Band Squats'],
            ['name' => 'Band Rows'],
            ['name' => 'Band Deadlifts'],
            ['name' => 'Band Overhead Press'],
            ['name' => 'High Knees'],
            ['name' => 'Repeat the circuit'],
            ['name' => 'Cool Down with light stretching'],
        ];

        foreach ($exercises as $exercise) {
            Exercise::create($exercise);
        }

        $workouts = [
            [
                'name' => 'Light Workout',
                'slug' => 'light-workout',
                'difficulty' => 'easy',
                'description' => 'A light workout for beginners or those looking for a low-impact routine.',
                'exercises' => [
                    ['name' => 'Jogging in place', 'description' => '5 minutes', 'duration' => 300],
                    ['name' => 'Body stretching', 'description' => '3 minutes', 'duration' => 180],
                    ['name' => 'Squat', 'description' => '60 seconds', 'duration' => 60],
                    ['name' => 'Plank', 'description' => '60 seconds', 'duration' => 60],
                    ['name' => 'Sit-up', 'description' => '60 seconds', 'duration' => 60],
                    ['name' => 'Rest', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Body stretching', 'description' => '3 minutes', 'duration' => 180],
                    ['name' => 'Deep breathing', 'description' => '3 minutes', 'duration' => 180],
                ],
            ],
            [
                'name' => 'Medium Workout',
                'slug' => 'medium-workout',
                'difficulty' => 'moderate',
                'description' => 'A moderate workout for those looking to increase their fitness level.',
                'exercises' => [
                    ['name' => 'Jogging in place', 'description' => '5 minutes', 'duration' => 300],
                    ['name' => 'Body stretching', 'description' => '4 minutes', 'duration' => 240],
                    ['name' => 'Push-up', 'description' => '60 seconds', 'duration' => 60],
                    ['name' => 'Squat Jump', 'description' => '60 seconds', 'duration' => 60],
                    ['name' => 'Mountain Climber', 'description' => '60 seconds', 'duration' => 60],
                    ['name' => 'Jumping Jack', 'description' => '60 seconds', 'duration' => 60],
                    ['name' => 'Rest', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Body stretching', 'description' => '3 minutes', 'duration' => 180],
                    ['name' => 'Deep breathing', 'description' => '3 minutes', 'duration' => 180],
                ],
            ],
            [
                'name' => 'Heavy Workout',
                'slug' => 'heavy-workout',
                'difficulty' => 'hard',
                'description' => 'An intense workout for those looking to challenge themselves and build strength.',
                'exercises' => [
                    ['name' => 'Jogging in place', 'description' => '5 minutes', 'duration' => 300],
                    ['name' => 'Body stretching', 'description' => '5 minutes', 'duration' => 300],
                    ['name' => 'Light warm-up exercises', 'description' => '4 minutes', 'duration' => 240],
                    ['name' => 'Burpee', 'description' => '90 seconds', 'duration' => 90],
                    ['name' => 'Glute Bridge', 'description' => '90 seconds', 'duration' => 90],
                    ['name' => 'Elevated Push-up', 'description' => '90 seconds', 'duration' => 90],
                    ['name' => 'Side Plank', 'description' => '90 seconds', 'duration' => 90],
                    ['name' => 'Russian Twist', 'description' => '90 seconds', 'duration' => 90],
                    ['name' => 'Rest', 'description' => '3 minutes', 'duration' => 180],
                    ['name' => 'Body stretching', 'description' => '5 minutes', 'duration' => 300],
                    ['name' => 'Deep breathing', 'description' => '5 minutes', 'duration' => 300],
                    ['name' => 'Short meditation', 'description' => '3 minutes', 'duration' => 180],
                ],
            ],
            [
                'name' => 'Yoga Routine',
                'slug' => 'yoga-routine',
                'difficulty' => 'moderate',
                'description' => 'A calming yoga routine to improve flexibility and balance.',
                'exercises' => [
                    ['name' => 'Sun Salutation', 'description' => '10 minutes', 'duration' => 600],
                    ['name' => 'Downward Dog', 'description' => '1 minute', 'duration' => 60],
                    ['name' => 'Tree Pose', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Savasana', 'description' => '5 minutes', 'duration' => 300],
                ],
            ],
            [
                'name' => 'Gym Workout',
                'slug' => 'gym-workout',
                'difficulty' => 'hard',
                'description' => 'A comprehensive gym workout for building strength and muscle.',
                'exercises' => [
                    ['name' => 'Bench Press', 'description' => '10 minutes', 'duration' => 600],
                    ['name' => 'Squat', 'description' => '10 minutes', 'duration' => 600],
                    ['name' => 'Deadlift', 'description' => '10 minutes', 'duration' => 600],
                    ['name' => 'Pull-up', 'description' => '10 minutes', 'duration' => 600],
                    ['name' => 'Rest', 'description' => '5 minutes', 'duration' => 300],
                ],
            ],
            [
                'name' => 'Resistance Band Workout',
                'slug' => 'resistance-band-workout',
                'difficulty' => 'moderate',
                'description' => 'A full-body workout using a resistance band.',
                'exercises' => [
                    ['name' => 'Band Squats', 'description' => '9 minutes', 'duration' => 540],
                    ['name' => 'Band Rows', 'description' => '9 minutes', 'duration' => 540],
                    ['name' => 'Band Deadlifts', 'description' => '9 minutes', 'duration' => 540],
                    ['name' => 'Band Overhead Press', 'description' => '9 minutes', 'duration' => 540],
                    ['name' => 'Rest', 'description' => '5 minutes', 'duration' => 300],
                ],
            ],
            [
                'name' => 'Cardio Blast',
                'slug' => 'cardio-blast',
                'difficulty' => 'hard',
                'description' => 'A high-intensity cardio workout for burning calories and improving heart health.',
                'exercises' => [
                    ['name' => 'Jumping Jacks', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Burpee', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'High Knees', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Mountain Climber', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Squat Jump', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Rest', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Repeat the circuit', 'description' => '10 minutes', 'duration' => 600],
                    ['name' => 'Cool Down with light stretching', 'description' => '5 minutes', 'duration' => 300],
                ],
            ],
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