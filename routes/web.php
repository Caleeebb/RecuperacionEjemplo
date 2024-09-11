<?php

use App\Http\Controllers\Auth\LogInController;
use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Route;
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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/registro', function () {
    return  view('registro');
})->name('registro');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/productos', function () {
    return view('productos');
})->name('productos');


Route::post('/logOut', [LogOutController::class, 'destroy'])->middleware('auth')->name('logOut');
Route::post('logIn', [LogInController::class, 'store'])->name('LogIn');

Route::post('/registro', [RegisterController::class, 'store'])->name('userCreate');
Route::get('/registro', [RegisterController::class, 'create'])->name('formRegister');

//Route::middleware('auth')->group(function (){
Route::resource('/empleados', EmpleadosController::class);
