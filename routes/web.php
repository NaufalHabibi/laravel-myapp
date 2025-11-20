<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Guest Routes (Belum Login)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {

    // Register
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    // Login (breeze)
    Route::get('/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])
        ->name('login');
});

// AUTH BREEZE ROUTES (JANGAN DI DALAM GUEST!)
require __DIR__ . '/auth.php';


/*
|--------------------------------------------------------------------------
| User Routes (Setelah Login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Home user
    Route::get('/', function () {
        return view('home');
    })->name('home');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Products & Category CRUD
    Route::resource('/products', ProductController::class);
    Route::resource('/category', CategoryController::class);
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
