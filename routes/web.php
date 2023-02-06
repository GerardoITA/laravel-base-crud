<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
Route::get('/', [MainController::class, 'welcome'])
    -> name('welcome');
Route::get('/saint/show/{id}', [MainController::class, 'saintShow'])
    ->name('saint.show');
Route::get('/', [MainController::class, 'welcome'])
    ->name('saint.destroy');
/* Route::get('/', [MainController::class, 'saintCreate'])
    ->name('saint.create'); */

