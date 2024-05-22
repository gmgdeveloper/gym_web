<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

// Route for showing login form
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Route for submitting login form
Route::post('login', [AuthController::class, 'login']);

// Route for logging out
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Route for showing registration form
// Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');

// Route for submitting registration form
// Route::post('register', [AuthController::class, 'register']);

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




    // Show form to add a new User
    Route::get('addUser', [UserController::class, 'create'])->name('user.create');

    // Store the newly added User
    Route::post('addUser', [UserController::class, 'store'])->name('user.store');

    // Show all User
    Route::get('seeUsers', [UserController::class, 'index'])->name('user.index');

    // Show details of a specific User
    Route::get('seeUser/{user}', [UserController::class, 'show'])->name('user.show');

    // Show form to edit a specific User
    Route::get('editUser/{user}', [UserController::class, 'edit'])->name('user.edit');

    // Update a specific User
    Route::post('updateUser/{user}', [UserController::class, 'update'])->name('user.update');

    // Delete a specific User
    Route::delete('deleteUser/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});

require __DIR__ . '/auth.php';
