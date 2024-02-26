<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\UserController;

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

Route::get('/',[ExportController::class,'index'])->name('index');
Route::get('/export',[ExportController::class,'export'])->name('export');
Route::get('import-export', [UserController::class, 'importExport'])->name('import-export');
Route::post('import', [UserController::class, 'import']) ->name('import');
Route::get('export', [UserController::class, 'export']) ->name('export');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
