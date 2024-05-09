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
            'gender' => 'male',
            'weight' => 82,
            'height' => 175,
            'birth_date' => Carbon::createFromDate(2002, 11, 16),
            'last_weight_recorded_at' => now()->subDays(30)
        ]);
        
        $userId = 1; // Change this to the desired user ID
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 100; $i++) {
            $weight = $faker->numberBetween(50, 100);
            $height = $faker->numberBetween(150, 200);
            $recordedAt = Carbon::now()->subDays($i * 7);

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
        ]);
    }
    private function calculateBMI($weight, $height)
    {
        return ($weight / pow($height / 100, 2));
    }
}
