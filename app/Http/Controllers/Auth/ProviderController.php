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
    public function redirect($provider, $loginType)
    {
        // dd($provider);
        // if ($provider == 'google') {
        //     if ($loginType == 'login') {
        //         $provider = 'google-login';
        //     } else if ($loginType == 'register') {
        //         $provider = 'google-register';
        //     }
            
        // } else if ($provider == 'github') {
        //     if ($loginType == 'login') {
        //         $provider = 'github-login';
        //     } else if ($loginType == 'register') {
        //         $provider = 'github-register';
        //     }
        // }
        
        session(['my_login_type' => $loginType]);
        return Socialite::driver($provider)->redirect();
    }

    // Callback
    public function callback($provider)
    {
        // dd($provider);

        // Recuperamos el tipo de login
        $loginType = session('my_login_type');
        // dd($provider, $loginType);

        try {            

            $socialUser = Socialite::driver($provider)->user();

            // dd($socialUser);

            $user = User::where([
                'provider' => $provider,
                'provider_id' => $socialUser->id,
                'email' => $socialUser->getEmail(),
            ])->first();

            // dd($user); // Regresa null si no existe el usuario


            // Si no existe el usuario lo creamos
            if($user === null){


                // Verificamos si el usuario con ese correo ya existe
                if($loginType === 'register'){
                    if(User::where('email', $socialUser->getEmail())->exists()){
                        return redirect('/register')->withErrors( ['email' => __('A user with this email is already registered')] );
                    }
                }

                if($loginType === 'login'){
                    if(User::where('email', $socialUser->getEmail())->exists()){
                        return redirect('/login')->withErrors( ['email' => __('A user with this email is already registered')] );
                    }
                }

                // Si venimos de la forma de Register, Creamos el usuario nuevo 
                if($loginType === 'register'){
                    $user = User::create([
                        'name' => $socialUser->getName(),
                        'email' => $socialUser->getEmail(),
                        'provider' => $provider,
                        'provider_id' => $socialUser->getId(),
                        'provider_token' => $socialUser->token,
                        'email_verified_at' => now(),
                    ]);

                    // User Login
                    Auth::login($user);

                    $notification = array(
                        'message' => 'Usuario de '. $provider .' registrado correctamente',
                        'alert-type' => 'success'
                    );

                    return redirect('/dashboard')->with($notification);
                }

                // User Null Login
                return redirect('/login')->withErrors( ['email' => __('User not found or invalid credentials')] );

            }else{

                if($loginType === 'register'){

                    return redirect('/register')->withErrors( ['email' => __('A user with this email is already registered')] );

                }else{

                    // User Login
                    Auth::login($user);
                    return redirect('/dashboard');
                }
                
            }


        } catch (\Exception $e) {

            return redirect('/login');
        }
        
    }
}
