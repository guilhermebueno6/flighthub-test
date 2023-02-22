<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashController::class, 'show']);

Route::get('/search/{name}', [DashController::class, 'search']);

Route::get('/getall', [DashController::class, 'getAll']);
