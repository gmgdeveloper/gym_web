<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;   // Your local change
use App\Http\Controllers\FrontController;  // Remote change
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\CustomizeFrontendController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Show form to add a new gym
    Route::get('addGym', [GymController::class, 'create'])->name('gym.create');

    // Store the newly added gym
    Route::post('addGym', [GymController::class, 'store'])->name('gym.store');

    // Show all gyms
    Route::get('seeGyms', [GymController::class, 'index'])->name('gym.index');

    // Show details of a specific gym
    Route::get('seeGym/{gym}', [GymController::class, 'show'])->name('gym.show');

    Route::post('updateGymProfile/{id}', [GymController::class, 'updateGymProfile'])->name('gym.updateGymProfile');

    // Show form to edit a specific gym
    Route::get('editGym/{gym}', [GymController::class, 'edit'])->name('gym.edit');

    // Update a specific gym
    Route::post('updateGym/{gym}', [GymController::class, 'update'])->name('gym.update');

    // Delete a specific gym
    Route::delete('deleteGym/{gym}', [GymController::class, 'destroy'])->name('gym.destroy');


    // Show form to add a new review
    Route::get('addReview', [ReviewController::class, 'create'])->name('review.create');

    // Store the newly added review
    Route::post('addReview', [ReviewController::class, 'store'])->name('review.store');

    // Show all reviews
    Route::get('seeReviews', [ReviewController::class, 'index'])->name('review.index');

    // Show details of a specific review
    Route::get('seeReview/{review}', [ReviewController::class, 'show'])->name('review.show');

    // Show form to edit a specific review
    Route::get('editReview/{review}', [ReviewController::class, 'edit'])->name('review.edit');

    // Update a specific review
    Route::post('updateReview/{review}', [ReviewController::class, 'update'])->name('review.update');

    // Delete a specific review
    Route::delete('deleteReview/{review}', [ReviewController::class, 'destroy'])->name('review.destroy');


    // Show form to add a new User
    Route::get('addUser', [UserController::class, 'create'])->name('user.create');

    // Store the newly added User
    Route::post('addUser', [UserController::class, 'store'])->name('user.store');

    // Show all User
    Route::get('seeUsers', [UserController::class, 'index'])->name('user.index');

    // Show details of a specific User
    Route::get('seeUser/{user}', [UserController::class, 'show'])->name('user.show');

    // Show details of a update User
    Route::post('userUpdate/{id}', [UserController::class, 'updateProfile'])->name('user.updateProfile');

    // Show details of a logged in User
    Route::get('profile/{user}', [UserController::class, 'profile'])->name('user.profile');

    // Show form to edit a specific User
    Route::get('editUser/{user}', [UserController::class, 'edit'])->name('user.edit');

    // Update a specific User
    Route::post('updateUser/{user}', [UserController::class, 'updateProfile'])->name('user.update');

    // Delete a specific User
    Route::delete('deleteUser/{user}', [UserController::class, 'destroy'])->name('user.destroy');

    Route::post('import', [ImportController::class, 'import'])->name('gyms.import');

    Route::get('Add-Mainpage', [CustomizeFrontendController::class, 'editMainPage'])->name('mainpage.create');
    Route::get('customizeMainPage', [CustomizeFrontendController::class, 'editMainPage'])->name('mainpage.edit');
    Route::post('mainpage/update', [CustomizeFrontendController::class, 'updateMainPage'])->name('mainpage.update');
});

// Frontend routes
Route::get('index', [FrontController::class, 'index'])->name('index');
Route::get('about', [FrontController::class, 'about'])->name('about');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');
Route::get('faq', [FrontController::class, 'faq'])->name('faq');
Route::get('single_gym', [FrontController::class, 'single_gym'])->name('single_gym');
Route::get('filter', [FrontController::class, 'filter'])->name('filter');
Route::get('fregister', [FrontController::class, 'fregister'])->name('fregister');
Route::get('flogin', [FrontController::class, 'flogin'])->name('flogin');

require __DIR__ . '/auth.php';
