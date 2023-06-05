<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogProjectController;
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






Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});
