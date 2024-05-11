<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\UserMeasurement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {        
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function updateProfilePicture(Request $request) : RedirectResponse {
        $request->validate([
            'profile-picture' => 'image|file|max:1024'
        ]);

        if ($request->hasFile('profile-picture')) {
            $user = $request->user();

            $profilePicturePath = $request->file('profile-picture')->store('profile-pictures', 'public');

            $user->profile_picture = $profilePicturePath;
            $user->save();
        }
        return Redirect::route('profile.edit')->with('status-image', 'profile-picture-updated');
    }

    public function storeMeasurement(Request $request) {
        $request->validate([
            'weight' => 'required|numeric',
        ]);
        $weight = $request->weight;
        $height = auth()->user()->height;
        $bmi = $weight / (($height / 100) * ($height / 100));

        $measurement = new UserMeasurement();
        $measurement->user_id = auth()->id();
        $measurement->weight = $weight;
        $measurement->height = $height;
        $measurement->bmi = $bmi;
        $measurement->recorded_at = now();
        $measurement->save();

        $user = $request->user();
        $user->weight = $weight;
        $user->last_weight_recorded_at = now();
        $user->save();

        return redirect()->route('dashboard');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
