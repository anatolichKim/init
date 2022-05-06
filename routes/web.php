<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
})->name('root');

Auth::routes();

Route::middleware('guest')
    ->namespace('App\Http\Controllers\Admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
        Route::namespace('Blog')
            ->prefix('blog')
            ->group(function() {
               Route::resource('categories', 'CategoryController')->names('admin.blog.categories');
            });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
