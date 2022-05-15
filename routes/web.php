<?php

use Illuminate\Support\Facades\Route;

use App\Models\Citizens;
use App\Http\Controllers\CitizensController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Citizens/register', [CitizensController::class, 'register'])->name('Citizens/register');
Route::post('/Citizens/register', [CitizensController::class, 'store'])->name('Citizens/register');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController ::class, 'index'])->name('home');
Route::get('/Citizens/get_all', [CitizensController::class, 'get_all'])->name('Citizens/get_all');
Route::get('/Citizens/get_by_id/{id}', [CitizensController::class, 'get_by_id']);
Route::get('/Citizens/edit/{id}', [CitizensController::class, 'edit']);
Route::post('/Citizens/update',[CitizensController::class,'update'])->name('Citizens/update');
Route::get('/Citizens/delete/{id}', [CitizensController::class, 'delete']);
Route::get('/Citizens/search/{id}', [CitizensController::class, 'get_by_id']);
