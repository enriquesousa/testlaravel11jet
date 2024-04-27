<?php

use Illuminate\Support\Facades\Route;

// Mis controladores
use App\Http\Controllers\AdminController;


/*
    Rutas Iniciales
    Welcome, home y Dashboard
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');



// Dos Paneles de Entrada (Dashboard normal y Dashboard de Control para Administradores)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
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
        // Route::get('/admin/edit/profile', 'EditProfile')->name('admin.edit.profile');
        // Route::post('/admin/store/profile', 'StoreProfile')->name('admin.store.profile');
    
        // Route::get('/admin/change/password', 'ChangePassword')->name('admin.change.password');
        // Route::post('/admin/update/password', 'UpdatePassword')->name('admin.update.password');
    });




});












