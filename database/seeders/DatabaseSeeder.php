<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserMeasurement;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Javier',
            'email' => 'javier@gmail.com',
            'password'=> bcrypt('password'),
        ]);
        
        $userId = 1; // Change this to the desired user ID
        $faker = \Faker\Factory::create();

        // Seed measurements for the last 7 days
        for ($i = 1; $i <= 7; $i++) {
            $weight = $faker->numberBetween(50, 100); // Example weight
            $height = $faker->numberBetween(150, 200); // Example height
            $recordedAt = Carbon::now()->subDays(7 - $i);

            $userMeasurement = new UserMeasurement();
            $userMeasurement->user_id = $userId;
            $userMeasurement->weight = $weight;
            $userMeasurement->height = $height;
            $userMeasurement->bmi = $this->calculateBMI($weight, $height);
            $userMeasurement->recorded_at = $recordedAt;
            $userMeasurement->save();
        }



        $this->call([
            WorkoutSeeder::class,
            // Other seeders if you have
        ]);
    }
    private function calculateBMI($weight, $height)
    {
        // BMI formula: BMI = weight(kg) / (height(m))^2
        return ($weight / pow($height / 100, 2));
    }
}
