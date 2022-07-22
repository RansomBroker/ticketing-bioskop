<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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
    Route::get('/',function(){
        return view('index');
    });

    Route::middleware(['admin.check'])->group(function () {
        Route::controller(AdminController::class)->group(function (){

            Route::get('/ubah-film',function(){
                return view('ubah-film');
            });


            Route::get('/add-new-film', 'addNewFilmView');
            Route::post('/add-new-film/process', 'addNewFilmProcess');

            Route::get('/list-film',function(){
                return view('list-film');
            });
        });
    });
});

Route::withoutMiddleware('web')->group(function () {

    // without middleware
    Route::get('/login',function(){
        return view('login');
    });

    Route::get('/register',function(){
        return view('register');
    });

    Route::post('/register/process', [AuthController::class, 'registerUserProcess']);
    Route::post('admin/register/admin/process', [AuthController::class, 'registerAdminProcess']);
    Route::get('/register', [AuthController::class, 'registerUserView']);
    Route::get('/login', [AuthController::class, 'loginUserView']);
    Route::post('/login/process', [AuthController::class, 'loginProcess']);
});


