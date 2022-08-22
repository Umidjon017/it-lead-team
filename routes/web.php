<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamOfExpertController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::resource('/portfolios', PortfolioController::class);

Route::get('/about', [TeamOfExpertController::class, 'index']);

Route::resource('/contact', ContactUsController::class);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
