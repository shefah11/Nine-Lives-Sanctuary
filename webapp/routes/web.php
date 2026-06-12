<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\CatController;


// ===== HOME ROUTE =====
Route::get('/', function () {
    return view('layouts.app');
});

// Guest-Only Authentication Framework Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// Authenticated Account Actions Block
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    // Profile Routing Architecture
    Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile.show');
    Route::put('/user/profile', [UserProfileController::class, 'update'])->name('profile.update');
});

// ===== HEALTHCARE GUIDE ROUTES =====
Route::get('/health', [HealthController::class, 'index'])->name('health.index');
Route::get('/health/{id}', [HealthController::class, 'show'])->name('health.show');

// Admin routes for healthcare (protected by admin middleware)
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/health', [HealthController::class, 'manage'])->name('health.manage');
    Route::get('/health/create', [HealthController::class, 'create'])->name('health.create');
    Route::post('/health', [HealthController::class, 'store'])->name('health.store');
    Route::get('/health/{id}/edit', [HealthController::class, 'edit'])->name('health.edit');
    Route::put('/health/{id}', [HealthController::class, 'update'])->name('health.update');
    Route::delete('/health/{id}', [HealthController::class, 'destroy'])->name('health.destroy');
});

// Example of Guarded Role Middleware Management (Useful for Member 2/3 elements)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return "Welcome to the Sanctuary Administration Command Room.";
    });
});

// ===== ADOPTION APPLICATION ROUTES =====
Route::get('/adoptions/apply/{cat_id}', [AdoptionController::class, 'showApplyForm'])->name('adoptions.apply');


// ADOPTION GALLERY ROUTES
Route::get('/', [CatController::class, 'index']);

// CAT DETAILS
Route::get('/cat-details/{id}', [CatController::class, 'show']);
