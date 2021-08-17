<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// })->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/',[UserController::class,'welcome'])->name('home');
Route::get('/doctors',[UserController::class,'doctor'])->name('doctor');
Route::get('/location',[UserController::class,'loc'])->name('loc');
Route::get('/seat-details',[UserController::class,'seat'])->name('seat');
Route::get('/covid',[UserController::class,'covid'])->name('covid');
Route::get('/ambulance',[UserController::class,'ambul'])->name('ambul');