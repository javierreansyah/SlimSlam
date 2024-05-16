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
            ['name' => 'Jogging in place', 'image'=> 'jogging-in-place.png'],
            ['name' => 'Body stretching', 'image'=> 'body-stretching.jpg'],
            ['name' => 'Squat', 'image'=> 'squat.jpg'],
            ['name' => 'Plank', 'image'=> 'plank.jpg'],
            ['name' => 'Sit-up', 'image'=> 'sit-up.jpg'],
            ['name' => 'Rest', 'image'=> 'rest.jpg'],
            ['name' => 'Deep breathing', 'image'=> 'deep-breathing.jpg'],
            ['name' => 'Push-up', 'image'=> 'push-up.jpg'],
            ['name' => 'Squat Jump', 'image'=> 'squat-jump.jpg'],
            ['name' => 'Mountain Climber', 'image'=> 'mountain-climber.jpg'],
            ['name' => 'Jumping Jack', 'image'=> 'jumping-jack.jpg'],
            ['name' => 'Light warm-up exercises', 'image'=> 'light-warm-up-exercises.jpg'],
            ['name' => 'Burpee', 'image'=> 'burpee.jpg'],
            ['name' => 'Glute Bridge', 'image'=> 'glute-bridge.jpg'],
            ['name' => 'Elevated Push-up', 'image'=> 'elevated-push-up.jpg'],
            ['name' => 'Side Plank', 'image'=> 'side-plank.jpg'],
            ['name' => 'Russian Twist', 'image'=> 'russian-twist.jpeg'],
            ['name' => 'Short meditation', 'image'=> 'short-meditation.jpg'],
            ['name' => 'Sun Salutation', 'image'=> 'sun-salutation.jpg'],
            ['name' => 'Downward Dog', 'image'=> 'downward-dog.jpg'],
            ['name' => 'Tree Pose', 'image'=> 'tree-pose.jpg'],
            ['name' => 'Savasana', 'image'=> 'savasana.jpg'],
            ['name' => 'Bench Press', 'image'=> 'bench-press.jpg'],
            ['name' => 'Deadlift', 'image'=> 'deadlift.jpg'],
            ['name' => 'Pull-up', 'image'=> 'pull-up.jpg'],
            ['name' => 'Band Squats', 'image'=> 'band-squats.jpg'],
            ['name' => 'Band Rows', 'image'=> 'band-rows.jpg'],
            ['name' => 'Band Deadlifts', 'image'=> 'band-deadlifts.jpeg'],
            ['name' => 'Band Overhead Press', 'image'=> 'band-overhead-press.jpg'],
            ['name' => 'High Knees', 'image'=> 'high-knees.jpg'],
            ['name' => 'Cool Down with light stretching', 'image'=> 'cool-down-with-light-stretching.jpg'],
            ['name' => 'Gentle Body stretching', 'image'=> 'gentle-body-stretching.jpg'],
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
                'image' => 'light-workout.jpg',
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
                'image' => 'moderate-workout.jpg',
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
                'image' => 'hard-workout.jpg',
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
                'image' => 'yoga-routine.jpg',
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
                'image' => 'gym-workout.jpg',
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
                'description' => 'A full-body workout using resistance bands to build strength and endurance.',
                'image' => 'resistance-band-workout.jpg',
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
                'description' => 'Intense cardio workout to burn calories and boost heart health.',
                'image' => 'cardio-blast.jpg',
                'exercises' => [
                    ['name' => 'Jumping Jack', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Burpee', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'High Knees', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Mountain Climber', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Squat Jump', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Rest', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Jumping Jack', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Burpee', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'High Knees', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Mountain Climber', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Squat Jump', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Rest', 'description' => '2 minutes', 'duration' => 120],
                    ['name' => 'Cool Down with light stretching', 'description' => '5 minutes', 'duration' => 300],
                ],
            ],
            [
                'name' => 'Stretching Routine',
                'slug' => 'stretching-routine',
                'difficulty' => 'easy',
                'description' => 'A gentle stretching routine to improve flexibility and mobility.',
                'image' => 'stretching-routine.jpg',
                'exercises' => [
                    ['name' => 'Body stretching', 'description' => '5 minutes', 'duration' => 300],
                    ['name' => 'Sit-up', 'description' => '60 seconds', 'duration' => 60],
                    ['name' => 'Glute Bridge', 'description' => '90 seconds', 'duration' => 90],
                    ['name' => 'Savasana', 'description' => '3 minutes', 'duration' => 180],
                    ['name' => 'Deep breathing', 'description' => '3 minutes', 'duration' => 180],
                ],
            ],
            [
                'name' => 'Quick Relaxation',
                'slug' => 'quick-relaxation',
                'difficulty' => 'easy',
                'description' => 'A short routine designed for quick and effective relaxation.',
                'image' => 'quick-relaxation.jpg',
                'exercises' => [
                    ['name' => 'Deep breathing', 'description' => '3 minutes', 'duration' => 180],
                    ['name' => 'Short meditation', 'description' => '3 minutes', 'duration' => 180],
                    ['name' => 'Gentle Body stretching', 'description' => '3 minutes', 'duration' => 180],
                    ['name' => 'Savasana', 'description' => '3 minutes', 'duration' => 180],
                ],
            ],
        ];

        foreach ($exercises as $exerciseData) {
            Exercise::firstOrCreate(
                ['name' => $exerciseData['name']],
                ['image' => $exerciseData['image']]
            );
        }

        foreach ($workouts as $workoutData) {
            $workout = Workout::create([
                'name' => $workoutData['name'],
                'slug' => $workoutData['slug'],
                'difficulty' => $workoutData['difficulty'],
                'description' => $workoutData['description'],
                'image' => $workoutData['image'],
            ]);

            foreach ($workoutData['exercises'] as $exerciseData) {
                $exercise = Exercise::firstOrCreate(
                    ['name' => $exerciseData['name']]
                );

                $workout->exercises()->attach($exercise->id, [
                    'description' => $exerciseData['description'],
                    'duration' => $exerciseData['duration']
                ]);
            }
        }
    }
}