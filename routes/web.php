<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
/* ================== Admin Routes ================== */

Route::get('/', [HomeController::class,'index']);
Route::get('/about-us', [HomeController::class,'about']);
Route::get('/blog', [HomeController::class,'blog']);
Route::get('/accessories', [HomeController::class,'accessories']);
Route::get('/products', [HomeController::class,'categories']);
Route::get('/projects', [HomeController::class,'projects']);
Route::get('/projects/{slug}', [HomeController::class,'project']);
Route::get('/products/{slug}', [HomeController::class,'category']);
Route::get('/contact-us', [HomeController::class,'contact']);
