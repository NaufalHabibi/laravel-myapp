<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Guest Routes (Belum Login)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {

    // Register
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    // Login
    Route::get('/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])
        ->name('login');
});

// Auth default (Breeze)
require __DIR__ . '/auth.php';


/*
|--------------------------------------------------------------------------
| User Routes (SETELAH LOGIN) - TUGAS 9
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // LANDING PAGE / DASHBOARD USER (Blade Templating)
    Route::get('/', function () {
        $products = Product::latest()->take(8)->get();
        return view('user.home', compact('products'));
    })->name('home');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD
    Route::resource('/products', ProductController::class);
    Route::resource('/category', CategoryController::class);
});


/*
|--------------------------------------------------------------------------
| Admin Routes (TIDAK DIUBAH)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
