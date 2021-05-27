<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin; 
use App\Http\Controllers\Blog;

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

Route::get('/', [Blog\HomeController::class, 'index']);

Route::prefix('admin')->group(function(){
    Route::get('/', [Admin\HomeController::class, 'index'])->name('admin');

    Route::get('login', [Admin\Auth\LoginController::class, 'index'])->name('login');
    Route::post('login', [Admin\Auth\LoginController::class, 'authenticate']);
});