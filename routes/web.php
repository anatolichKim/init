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

//GET|HEAD        login ................................................................................................................................................................... login › Auth\LoginController@showLoginForm
//  POST            login ................................................................................................................................................................................... Auth\LoginController@login
//  POST            logout ........................................................................................................................................................................ logout › Auth\LoginController@logout
//  GET|HEAD        password/confirm ................................................................................................................................. password.confirm › Auth\ConfirmPasswordController@showConfirmForm
//  POST            password/confirm ............................................................................................................................................................ Auth\ConfirmPasswordController@confirm
//  POST            password/email ................................................................................................................................... password.email › Auth\ForgotPasswordController@sendResetLinkEmail
//  GET|HEAD        password/reset ................................................................................................................................ password.request › Auth\ForgotPasswordController@showLinkRequestForm
//  POST            password/reset ................................................................................................................................................ password.update › Auth\ResetPasswordController@reset
//  GET|HEAD        password/reset/{token} ................................................................................................................................. password.reset › Auth\ResetPasswordController@showResetForm
//  GET|HEAD        register ................................................................................................................................................... register › Auth\RegisterController@showRegistrationForm
//  POST            register .......................................................................................................................................................................... Auth\RegisterController@register


Route::middleware('guest')
    ->namespace('App\Http\Controllers\Auth')
    ->name('auth.')
    ->group(function() {
        Route::get('/welcome', [\App\Http\Controllers\Base\GuestController::class, 'index'])->name('guest');
        Route::get('/registration', [\App\Http\Controllers\Auth\RegisterController::class, 'show'])
            ->name('registration');
        Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])
            ->name('register');

        Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'show'])
            ->name('login');
        Route::post('/logger', [\App\Http\Controllers\Auth\LoginController::class, 'auth'])
            ->name('logger');

//        Route::get()
//            ->name();
//        Route::post()
//            ->name();
//
//        Route::get()
//            ->name();
//        Route::post()
//            ->name();
    })
;

Route::middleware('auth')
    ->name('auth.logout')
    ->post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::middleware('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
        Route::namespace('Blog')
            ->prefix('blog')
            ->group(function() {
               Route::resource('categories', 'CategoryController')
                   ->names('admin.blog.categories');

               Route::resource('courses', 'CourseController')
                    ->names('admin.blog.courses');

                Route::resource('modules', 'ModuleController')
                    ->names('admin.blog.modules');

               Route::resource('posts', 'PostController')
                   ->names('admin.blog.posts');

            });
});


Route::middleware('auth')
    ->get('/', [\App\Http\Controllers\Blog\HomeController::class, 'index'])
    ->name('blog');

Route::middleware('auth')
    ->namespace('App\Http\Controllers\Blog')
    ->prefix('blog')
    ->group(function () {
        Route::resource('init', 'InitController')
            ->only('index', 'show')
            ->names('blog.init');
    });
