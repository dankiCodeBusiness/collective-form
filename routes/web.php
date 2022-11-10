<?php

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

use App\Http\Controllers\CollectiveController;

Route::get('/', [CollectiveController::class, 'index'])->name('form.index');
Route::match(['post', 'get'], '/create', [CollectiveController::class, 'create'])->name('form.create');
Route::match(['put', 'get'], '/edit/{id}', [CollectiveController::class, 'edit'])->name('form.edit');
