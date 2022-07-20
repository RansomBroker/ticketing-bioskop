<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['web'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::withoutMiddleware('web')->group(function () {

    // without middleware
    Route::get('/not-login', function () {
        echo "anda belum login";
    });
    Route::post('/register/process', [AuthController::class, 'registerUserProcess']);
    Route::post('admin/register/admin/process', [AuthController::class, 'registerAdminProcess']);
    Route::get('/register', [AuthController::class, 'registerUserView']);
    Route::get('/login', [AuthController::class, 'loginUserView']);
    Route::post('/login/process', [AuthController::class, 'loginProcess']);
});

