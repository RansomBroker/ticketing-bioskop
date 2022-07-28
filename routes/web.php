<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
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
    Route::get('/', [IndexController::class, 'index']);

    // logout
    Route::get('logout', [AuthController::class, 'logout']);

    Route::middleware(['admin.check'])->group(function () {
        Route::controller(AdminController::class)->group(function (){

            // film upcoming
            Route::get('/edit-film/{id}', 'editFilmView');
            Route::post('/edit-film/process', 'editFilmProcess');
            Route::get('/add-new-film', 'addNewFilmView');
            Route::post('/add-new-film/process', 'addNewFilmProcess');
            Route::get('/list-film', 'listFilmView');
            Route::get('/delete-film/{id}', 'deleteFilm');

            // playing film
            Route::get('/playing-list', 'playingListView');
            Route::get('/add-new-playing', 'addNewPlayingView');
            // get studio api
            Route::get('/get-studio/{id}', 'getStudio');
            // process
            Route::post('/add-new-playing/process', 'addNewPlayingProcess');

            //studio
            Route::get('/studio-list', 'studioListView');
            Route::get('/add-new-studio', 'addNewStudioView');
            Route::get('/edit-studio/{id}', 'editStudioView');
            Route::post('/add-new-studio/process', 'addNewStudioProcess');
            Route::post('/edit-studio/process', 'editStudioProcess');

            // admin
            Route::get('/add-new-admin', 'addNewAdminView');
            Route::get('/admin-list', 'adminListView');
            Route::post('/add-new-admin/process', 'addNewAdminProcess');
            Route::get('/admin-remove/{id}', 'adminRemove');

            // list theater
            Route::get('/theater-list', 'theaterListView');
            Route::get('/add-new-theater', 'addNewTheaterView');
            Route::get('/edit-theater/{id}', 'editTheaterView');
            Route::post('/edit-theater/process', 'editTheaterProcess');
            Route::post('/add-new-theater/process', 'addNewTheaterProcess');
            Route::get('/theater-remove/{id}', 'removeTheater');


            // city
            Route::get('/city-list', 'cityListView');
            Route::get('/add-new-city', 'addNewCityView');
            Route::get('/edit-city/{id}', 'editCityView');
            Route::post('/edit-city/process', 'editCityProcess');
            Route::get('/delete-city/{id}', 'deleteCity');
            Route::post('/add-new-city/process', 'addNewCityProcess');
        });
    });
});

Route::withoutMiddleware('web')->group(function () {

    Route::get('/term-of-use', function () {
        return view('terms-of-use');
    });

    Route::get('/profile', function () {
        return view('profile');
    });

    // without middleware
    Route::get('/profile',function(){
        return view('profile');
    });
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

Route::get('/buy-ticket',function(){
    return view('buy-ticket');
});


