<?php

use Illuminate\Support\Facades\Route;

// Mis controladores
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ProviderController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


/*
    Rutas Iniciales
    Welcome, home y Dashboard
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


// *********
// Socialite
// *********
Route::get('/auth/{provider}/{loginType}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);



// Dos Paneles de Entrada (Dashboard normal y Dashboard de Control para Administradores)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {

    // En Dashboard que es la pagina principal de inicio cuando hacemos login con Jetstream
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    // Panel de Control / Dashboard de Control para Administradores
    Route::get('/dashboard_admin', function () {
        return view('admin.dashboard');
    })->name('dashboard_admin');

});


// Email Verificación
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    
    $notification = array(
        'message' => __('Email verified successfully!'),
        'alert-type' => 'success'
    );    

    return redirect('/dashboard')->with($notification);
})->middleware(['auth', 'signed'])->name('verification.verify');






/*
    Mis Rutas
    Rutas para el Backend
*/

Route::get('/backend/welcome', function () {
    return view('welcome-backend');
})->name('backend_welcome');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware('auth')->group(function () {

    Route::controller(AdminController::class)->group(function () {

        Route::get('/admin/logout', 'AdminDestroy')->name('admin.logout');

        Route::get('/admin/view/profile', 'ViewProfile')->name('admin.view.profile');
        Route::get('/admin/edit/profile', 'EditProfile')->name('admin.edit.profile');
        Route::get('/admin/edit/photo', 'EditProfilePhoto')->name('admin.edit.photo');
        Route::post('/admin/store/photo', 'StorePhoto')->name('admin.store.photo');
        Route::post('/admin/store/profile', 'StoreProfile')->name('admin.store.profile');
        Route::get('/admin/change/password', 'ChangePassword')->name('admin.change.password');
        Route::post('/admin/update/password', 'UpdatePassword')->name('admin.update.password');

        Route::get('/admin/view/profile/jet', 'ViewProfileJet')->name('admin.view.profile.jet');
        Route::get('/admin/edit/profile/jet', 'EditProfileJet')->name('admin.edit.jet.profile');
        Route::get('/admin/change/password/jet', 'ChangePasswordJet')->name('admin.change.password.jet');
        Route::get('/admin/auth2fa/jet', 'AdminAuth2FAJet')->name('admin.auth2fa.jet');
        Route::get('/admin/browser/session/jet', 'AdminBrowserSessionJet')->name('admin.browser.session.jet');
        Route::get('/admin/delete/account/jet', 'AdminDeleteAccountJet')->name('admin.delete.account.jet');

        Route::get('/admin/change/locale/us', 'AdminChangeLocaleUS')->name('admin.change.locale.us');
        Route::get('/admin/change/locale/es', 'AdminChangeLocaleES')->name('admin.change.locale.es');

    });



});














