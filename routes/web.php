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
Route::get('/run_info/{run_info}/edit', [RunInfoController::class, 'edit'])->name('run_info.edit');
Route::put('/run_info/{run_info}/update', [RunInfoController::class, 'update'])->name('run_info.update');
Route::delete('/run_info/{run_info}/destroy', [RunInfoController::class, 'destroy'])->name('run_info.destroy');
