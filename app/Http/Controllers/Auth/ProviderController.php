<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{

    // Redirect
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    // Callback
    public function callback($provider)
    {
        // dd($provider);
        $socialUser = Socialite::driver($provider)->user();
        // dd($socialUser);

        $user = User::updateOrCreate(
            [
                'provider_id' => $socialUser->id,
                'provider' => $provider
            ],
            [
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'email_verified_at' => now(),
                'provider_token' => $socialUser->token,
            ]
        );

        Auth::login($user);

        return redirect('/dashboard');
    }
}
