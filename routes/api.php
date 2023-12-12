<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\resepAPIController;
use App\Http\Controllers\userAPIController;
use App\Http\Middleware\APIauth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-reseps', [resepAPIController::class, 'getReseps']);

Route::get('/get-resep', [resepAPIController::class, 'getResep']);

Route::get('/search-reseps', [resepAPIController::class, 'searchReseps']);

Route::get('/my-reseps', [resepAPIController::class, 'myReseps']) -> middleware(APIauth::class);

Route::post('/create-resep', [resepAPIController::class, 'createResep']) -> middleware(APIauth::class);

Route::post('/delete-resep', [resepAPIController::class, 'deleteResep']) -> middleware(APIauth::class);

Route::post('/update-resep', [resepAPIController::class, 'updateResep']) -> middleware(APIauth::class);

Route::post('/register', [userAPIController::class, 'register']);

Route::post('/auth', [userAPIController::class, 'authData']);

Route::get('/delete-account', [userAPIController::class, 'delete']) -> middleware(APIauth::class);
