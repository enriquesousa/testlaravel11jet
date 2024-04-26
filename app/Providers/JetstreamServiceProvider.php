<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);

        Fortify::authenticateUsing(function (Request $request) {

            // $user = User::where('email', $request->loginName)->orWhere('username', $request->loginName)->orWhere('phone', $request->loginName)->first();

            // dd($request->email, $request->username, $request->phone);
            // dd($request->loginName);
            // dd($request->email);

            $user = User::where('email', $request->email)->orWhere('username', $request->email)->orWhere('phone', $request->email)->first();

            // $user = User::where('email', $request->email)->orWhere('username', $request->username)->orWhere('phone', $request->phone)->first();

            // if ($request->username == null && $request->phone == null) {
            //     $user = User::where('email', $request->email)->first();
            // }
            // else {
            //     $user = User::where('email', $request->email)->orWhere('username', $request->username)->orWhere('phone', $request->phone)->first();
            // }

            

            // $user = User::where('email', $request->email)->first();
    
            if ($user &&
                Hash::check($request->password, $user->password)) {
                return $user;
            }
        });

    }

    /**
     * Configure the permissions that are available within the application.
     */
    protected function configurePermissions(): void
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
