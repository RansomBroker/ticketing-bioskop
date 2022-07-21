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
    Route::get('/login',function(){
        return view('login');
    });
    
    Route::get('/register',function(){
        return view('register');
    });
    
    Route::get('/ubah-film',function(){
        return view('ubah-film');
    });
    
    Route::get('/tambah',function(){
        return view('tambah');
    });
    
    Route::get('/index',function(){
        return view('index');
    });
    
    Route::get('/not-login', function () {
        echo "anda belum login";
    });
    Route::post('/register/process', [AuthController::class, 'registerUserProcess']);
    Route::post('admin/register/admin/process', [AuthController::class, 'registerAdminProcess']);


});

