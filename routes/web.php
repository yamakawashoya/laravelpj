<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\TestController;

Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'post']);
Route::get('/verror', [TestController::class, 'verror']);

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

