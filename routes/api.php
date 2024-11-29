<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BakatController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('refresh', [AuthController::class, 'refresh']);
    Route::get('me', [AuthController::class, 'me']);
});


Route::group(['middleware' => 'auth:api', 'prefix' => 'user'], function () {
    Route::get('', [UserController::class, 'index']);
    Route::post('', [UserController::class, 'store']);
    Route::get('{user}', [UserController::class, 'show']);
    Route::put('{user}', [UserController::class, 'update']);
    Route::delete('{user}', [UserController::class, 'destroy']);
});

Route::group(['middleware' => 'api', 'prefix' => 'setting'], function () {
    Route::get('/', [SettingController::class, 'index']);
    Route::post('/', [SettingController::class, 'update']);
});

Route::group(['prefix' => 'region'], function () {
    Route::get('provinces', [RegionController::class, 'provinces']);
    Route::get('regencies', [RegionController::class, 'regencies']);
});


Route::group(['middleware' => 'auth:api', 'prefix' => 'sekolah'], function () {
    Route::get('', [SekolahController::class, 'index']);
    Route::post('', [SekolahController::class, 'store']);
    Route::get('{sekolah}', [SekolahController::class, 'show']);
    Route::put('{sekolah}', [SekolahController::class, 'update']);
    Route::delete('{sekolah}', [SekolahController::class, 'destroy']);
});


Route::group(['middleware' => 'api', 'prefix' => 'kelas'], function () {
    Route::get('/', [KelasController::class, 'index']);
    Route::put('/{kelas}', [KelasController::class, 'update']);
});


Route::group(['middleware' => 'auth:api', 'prefix' => 'bakat'], function () {
    Route::get('', [BakatController::class, 'index']);
    Route::post('', [BakatController::class, 'store']);
    Route::get('{bakat}', [BakatController::class, 'show']);
    Route::post('{bakat}', [BakatController::class, 'update']);
    Route::delete('{bakat}', [BakatController::class, 'destroy']);
});
