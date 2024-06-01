<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;  
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\CustomizeFrontendController;
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

// Auth routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Gym routes
    Route::get('addGym', [GymController::class, 'create'])->name('gym.create');
    Route::post('addGym', [GymController::class, 'store'])->name('gym.store');
    Route::get('seeGyms', [GymController::class, 'index'])->name('gym.index');
    Route::get('seeGym/{gym}', [GymController::class, 'show'])->name('gym.show');
    Route::get('editGym/{gym}', [GymController::class, 'edit'])->name('gym.edit');
    Route::post('updateGym/{gym}', [GymController::class, 'update'])->name('gym.update');
    Route::delete('deleteGym/{gym}', [GymController::class, 'destroy'])->name('gym.destroy');
    Route::post('updateGymProfile/{id}', [GymController::class, 'updateGymProfile'])->name('gym.updateGymProfile');

    // Review routes
    Route::get('addReview', [ReviewController::class, 'create'])->name('review.create');
    Route::post('addReview', [ReviewController::class, 'store'])->name('review.store');
    Route::get('seeReviews', [ReviewController::class, 'index'])->name('review.index');
    Route::get('seeReview/{review}', [ReviewController::class, 'show'])->name('review.show');
    Route::get('editReview/{review}', [ReviewController::class, 'edit'])->name('review.edit');
    Route::post('updateReview/{review}', [ReviewController::class, 'update'])->name('review.update');
    Route::delete('deleteReview/{review}', [ReviewController::class, 'destroy'])->name('review.destroy');

    // User routes
    Route::get('addUser', [UserController::class, 'create'])->name('user.create');
    Route::post('addUser', [UserController::class, 'store'])->name('user.store');
    Route::get('seeUsers', [UserController::class, 'index'])->name('user.index');
    Route::get('seeUser/{user}', [UserController::class, 'show'])->name('user.show');
    Route::post('userUpdate/{id}', [UserController::class, 'updateProfile'])->name('user.updateProfile');
    Route::get('profile/{user}', [UserController::class, 'profile'])->name('user.profile');
    Route::get('editUser/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('updateUser/{user}', [UserController::class, 'updateProfile'])->name('user.update');
    Route::delete('deleteUser/{user}', [UserController::class, 'destroy'])->name('user.destroy');

    // Import routes
    Route::post('import', [ImportController::class, 'import'])->name('gyms.import');

    // Customize frontend routes
    Route::get('Add-Mainpage', [CustomizeFrontendController::class, 'editMainPage'])->name('mainpage.create');
    Route::get('customizeMainPage', [CustomizeFrontendController::class, 'editMainPage'])->name('mainpage.edit');
    Route::post('mainpage/update', [CustomizeFrontendController::class, 'updateMainPage'])->name('mainpage.update');
});

// Frontend routes
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
