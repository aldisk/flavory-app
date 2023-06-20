<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\NoAuthCheck;

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

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about-us');
});

// Login
Route::get('/login', function () {
    return view('login');
}) -> middleware(NoAuthCheck::class);

Route::post('/login/auth', [App\Http\Controllers\UserController::class, 'login'])-> middleware(NoAuthCheck::class) -> name('authLogin');

Route::get('/login/auth', function () {return back();});

// Register
Route::get('/register', function () {
    return view('register');
}) -> middleware(NoAuthCheck::class);

Route::post('/register/auth', [App\Http\Controllers\UserController::class, 'register'])-> middleware(NoAuthCheck::class) -> name('authRegister');

Route::get('/register/auth', function () {back();});

// Delete

Route::post('/delete/auth', [App\Http\Controllers\UserController::class, 'delete']) -> middleware(AuthCheck::class) -> name('authDelete');

Route::get('/delete/auth', function () {return back();});

// Profile
Route::get('/about-me', [App\Http\Controllers\UserController::class, 'getProfile'])-> middleware(AuthCheck::class);

Route::post('/about-me/update/auth', [App\Http\Controllers\UserController::class, 'updateData'])-> middleware(AuthCheck::class) -> name('authUpdateProfile');

Route::get('/about-me/update/auth', function () {return back();});

Route::post('/about-me/image/upload', [App\Http\Controllers\UserController::class, 'uploadProfilePic'])-> middleware(AuthCheck::class) ->name('uploadPP');

// Logout
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout']) -> name('logout');

// Resep
Route::get('/resep/view/{id}', [App\Http\Controllers\ResepController::class, 'viewResep']);

Route::get('/resep/insert', function () {return view('insert-resep');})-> middleware(AuthCheck::class);

Route::get('/resep/insert/{id}/fork', [App\Http\Controllers\ResepController::class, 'forkResepView'])-> middleware(AuthCheck::class);

Route::post('/resep/insert/fork', [App\Http\Controllers\ResepController::class, 'createFork'])-> middleware(AuthCheck::class) -> name('insertFork');

Route::post('/resep/insert/auth', [App\Http\Controllers\ResepController::class, 'createResep'])-> middleware(AuthCheck::class) -> name('insertResep');

Route::get('/resep/insert/auth', function () {return back();});

Route::post('/resep/delete/auth', [App\Http\Controllers\ResepController::class, 'deleteResep'])-> middleware(AuthCheck::class) -> name('removeResep');

Route::get('/resep/delete/auth', function () {return back();});

Route::get('/resep/update/{id}', [App\Http\Controllers\ResepController::class, 'resepUpdatePage'])-> middleware(AuthCheck::class);

Route::post('/resep/update/auth', [App\Http\Controllers\ResepController::class, 'updateResep'])-> middleware(AuthCheck::class) -> name('updateResep');

Route::get('/resep/search', [App\Http\Controllers\ResepController::class, 'searchResep'])->name('searchResep');

    // Review
    Route::post('/resep/review/insert', [App\Http\Controllers\ReviewController::class, 'insertReview']) -> middleware(AuthCheck::class) -> name('insertReview');

    Route::get('/resep/review/insert', function () {return back();});

    Route::post('/resep/review/delete', [App\Http\Controllers\ReviewController::class, 'deleteReview']) -> middleware(AuthCheck::class) -> name('deleteReview');

    Route::get('/resep/review/delete', function () {return back();});

    Route::post('/resep/review/update', [App\Http\Controllers\ReviewController::class, 'updateReview']) -> middleware(AuthCheck::class) -> name('updateReview');

    Route::get('/resep/review/update', function () {return back();});

    Route::get('/resep/view/{id}/review', [App\Http\Controllers\ResepController::class, 'viewReview']) -> name('viewReview');

// Error
Route::get('/error/{code}', function ($code) {return view('error')->with('errmsg', $code);});
