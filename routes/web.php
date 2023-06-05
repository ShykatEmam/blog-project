<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogProjectController;
use App\Http\Controllers\DashboardController;
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



Route::get('/',[BlogProjectController::class,'index'])->name('home');
Route::get('/single-blog',[BlogProjectController::class,'singleBlog'])->name('single.blog');
Route::get('/about',[BlogProjectController::class,'about'])->name('about');
Route::get('/contact',[BlogProjectController::class,'contact'])->name('contact');
Route::get('/category',[BlogProjectController::class,'category'])->name('category');






Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    
});
