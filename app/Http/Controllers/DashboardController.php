<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMeasurement;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $measurements = UserMeasurement::where('user_id', $userId)
                            ->where('recorded_at', '>=', Carbon::now()->subMonths(3))
                            ->orderBy('recorded_at')
                            ->get();

        $weightData = $measurements->pluck('weight');
        $dates = $measurements->pluck('recorded_at')->map(function ($date) {
            return Carbon::parse($date)->format('Y-m-d');
        });

        $user = User::find($userId);
        $bmi = $this->calculateBMI($user->weight, $user->height);

        return view('dashboard', compact('weightData', 'dates', 'bmi', 'user'));
    }

    private function calculateBMI($weight, $height)
    {
        if ($height === null || $weight === null || $height == 0) {
            return [
                'bmi' => "NaN",
                'message' => "BMI cannot be calculated."
            ];
        }

        $bmi = $weight / (($height / 100) * ($height / 100));

        if ($bmi < 18.5) {
            $category = "Underweight";
            $message = "Your BMI suggests you may be underweight. Consider consulting a healthcare professional for guidance on achieving a healthy weight.";
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            $category = "Normal";
            $message = "Congratulations! Your BMI is within the healthy range. Keep up the good work with a balanced diet and regular exercise.";
        } elseif ($bmi >= 25 && $bmi < 30) {
            $category = "Overweight";
            $message = "Your BMI indicates you may be overweight. Small changes in diet and exercise can make a big difference in your health.";
        } else {
            $category = "Obese";
            $message = "Your BMI suggests you may be obese. Small changes in lifestyle can lead to significant improvements in your health. Consider consulting with a healthcare professional for support and guidance.";
        }

        return [
            'bmi' => number_format($bmi, 1),
            'category' => $category,
            'message' => $message,
        ];
    }
}
