<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

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

Route::get('/',[StaticController::class,'index'])->name("home");
Route::get('/buy',[StaticController::class,'buy'])->name("buy");
Route::get('/discover',[StaticController::class,'discover'])->name("discover");
Route::get('/Contact',[StaticController::class,'Contact'])->name("contact");






