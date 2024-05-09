<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMeasurement;
use App\Http\Controllers\Controller;
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

        return view('dashboard', compact('weightData', 'dates'));
    }
}
