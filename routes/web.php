<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RunInfoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/run_info', [RunInfoController::class, 'index'])->name('run_info.index');
Route::post('/run_info', [RunInfoController::class, 'store_info'])->name('run_info.store_info');
