<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/post/login', [AuthController::class, 'postlogin'])->name('post.login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/post/register', [AuthController::class, 'postregister'])->name('post.register');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [UserController::class, 'index'])->name('home');
});