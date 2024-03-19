<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ProductController;
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

route::get('/', [AppController::class, 'index'])->name('app');
route::get('/app', [AppController::class, 'index'])->name('app');
route::get('/producten', [ProductController::class, 'index'])->name('producten');
