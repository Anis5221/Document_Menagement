<?php

use App\Http\Controllers\ComplainController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [HomeController::class, "wolcamePage"]);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/complain', function () {
//     return Inertia::render('RequestComplain/Complain');
// })->name('complain');

Route::resource('complain', ComplainController::class)->middleware('auth:sanctum');

// my request section .....
Route::get('/myrequest', [HomeController::class, 'index'])->name('myrequest')->middleware('auth:sanctum');
