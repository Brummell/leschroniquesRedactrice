<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
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

Route::prefix('')->name('blog.')->controller(BlogController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/post','post')->name('post');
    Route::get('/contact','contact')->name('contact');
    Route::get('/show/{article}','show')->name('show');
    Route::post('/docontact','doContact')->name('doContact');
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('home',HomeController::class)->middleware('CheckUserIdInSession');
    Route::resource('about',AboutController::class)->middleware('CheckUserIdInSession');
    Route::resource('post',PostController::class)->middleware('CheckUserIdInSession');
    Route::resource('contact',ContactController::class)->middleware('CheckUserIdInSession');
    Route::resource('article',ArticleController::class)->middleware('CheckUserIdInSession');
    Route::get('/login',[LoginController::class,'login'])->name('login');
    Route::post('/dologin',[LoginController::class,'dologin'])->name('dologin');
    Route::get('/logout',[LoginController::class,'dologout'])->name('dologout');
});

