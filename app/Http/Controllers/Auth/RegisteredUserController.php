<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\UserMeasurement;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'gender' => ['required', 'string', 'in:male,female'],
            'weight' => ['nullable', 'numeric', 'min:20', 'max:650'],
            'height' => ['nullable', 'numeric', 'min:100', 'max:300'],
            'birth_date' => ['nullable', 'date', 'before_or_equal:today'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'weight' => $request->weight,
            'height' => $request->height,
            'birth_date' => $request->birth_date,
        ]);

        $measurement = UserMeasurement::create([
            'user_id' => $user->id,
            'weight' => $request->weight,
            'height' => $request->height,
            'bmi' => $request->weight / (($request->height / 100) ** 2),
            'recorded_at' => now(),
        ]);

        event(new Registered($user));
        event(new Registered($measurement));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
