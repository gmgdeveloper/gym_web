<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
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

use App\Models\Gym;
use App\Models\Review;
use App\Models\User;

Route::get('/dashboard', function () {
    // Fetch data
    $totalGyms = Gym::count();
    $totalReviews = Review::count();
    $totalUsers = User::count();
    $recentUsers = User::orderBy('created_at', 'desc')->take(5)->get();
    $recentGyms = Gym::orderBy('created_at', 'desc')->take(5)->get();
    $recentReviews = Review::orderBy('created_at', 'desc')->take(5)->get();

    // Pass data to the view
    return view('dashboard', [
        'totalGyms' => $totalGyms,
        'totalReviews' => $totalReviews,
        'totalUsers' => $totalUsers,
        'recentUsers' => $recentUsers,
        'recentGyms' => $recentGyms,
        'recentReviews' => $recentReviews,
    ]);
})->middleware(['auth', 'admin_check'])->name('dashboard');

Route::middleware(['auth', 'admin_check'])->group(function () {

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
    Route::post('updateUser/{user}', [UserController::class, 'update'])->name('user.update');

    // Delete a specific User
    Route::delete('deleteUser/{user}', [UserController::class, 'destroy'])->name('user.destroy');

    Route::post('import', [ImportController::class, 'import'])->name('gyms.import');

    Route::get('customizeMainPage', [CustomizeFrontendController::class, 'editMainPage'])->name('mainpage.edit');
    Route::post('mainpage/store', [CustomizeFrontendController::class, 'storeMainPage'])->name('mainpage.store');
    Route::post('mainpage/update', [CustomizeFrontendController::class, 'updateMainPage'])->name('mainpage.update');
    Route::get('/terms-and-conditions', [CustomizeFrontendController::class, 'editTermsPage'])->name('terms.edit');
    Route::post('/terms-and-conditions/store', [CustomizeFrontendController::class, 'storeTermsPage'])->name('terms.store');
    Route::post('/terms-and-conditions/update', [CustomizeFrontendController::class, 'updateTermsPage'])->name('terms.update');
    Route::get('/privacy-policy', [CustomizeFrontendController::class, 'editPrivacyPage'])->name('privacy.edit');
    Route::post('/privacy-policy/store', [CustomizeFrontendController::class, 'storePrivacyPage'])->name('privacy.store');
    Route::post('/privacy-policy/update', [CustomizeFrontendController::class, 'updatePrivacyPage'])->name('privacy.update');
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
