<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
});

// Route for showing login form
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Route for submitting login form
Route::post('login', [AuthController::class, 'login']);

// Route for logging out
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Route for showing registration form
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');

// Route for submitting registration form
Route::post('register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Show form to add a new gym
    Route::get('addGym', [GymController::class, 'create'])->name('gym.create');

    // Store the newly added gym
    Route::post('addGym', [GymController::class, 'store'])->name('gym.store');

    // Show all gyms
    Route::get('seeGyms', [GymController::class, 'index'])->name('gym.index');

    // Show details of a specific gym
    Route::get('seeGym/{gym}', [GymController::class, 'show'])->name('gym.show');

    // Show form to edit a specific gym
    Route::get('editGym/{gym}', [GymController::class, 'edit'])->name('gym.edit');

    // Update a specific gym
    Route::post('updateGym/{gym}', [GymController::class, 'update'])->name('gym.update');

    // Delete a specific gym
    Route::delete('deleteGym/{gym}', [GymController::class, 'destroy'])->name('gym.destroy');
});

// frontend routes
Route::get('index', [FrontController::class, 'index'])->name('index');
Route::get('search', [FrontController::class, 'about'])->name('about');
Route::get('gym_rating', [FrontController::class, 'contact'])->name('contact');
Route::get('compare', [FrontController::class, 'faq'])->name('faq');
Route::get('single_gym', [FrontController::class, 'single_gym'])->name('single_gym');
Route::get('gym', [FrontController::class, 'filter'])->name('filter');
Route::get('fregister', [FrontController::class, 'fregister'])->name('fregister');
Route::get('flogin', [FrontController::class, 'flogin'])->name('flogin');
Route::get('user_pannel', [FrontController::class, 'user_pannel'])->name('user_pannel');
Route::get('terms', [FrontController::class, 'terms'])->name('terms');
Route::get('privacy', [FrontController::class, 'privacy'])->name('privacy');



require __DIR__ . '/auth.php';
