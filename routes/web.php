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


Route::middleware('guest')
    ->namespace('App\Http\Controllers\Auth')
    ->name('auth.')
    ->group(function() {
        Route::get('/welcome', [\App\Http\Controllers\Base\GuestController::class, 'index'])->name('guest');

        Route::get('/registration', [\App\Http\Controllers\Auth\RegisterController::class, 'show'])
            ->name('registration');
        Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])
            ->name('register');

        Route::get('/email-verification', [\App\Http\Controllers\Auth\VerifyEmailController::class, 'show'])
            ->name('email-verification');
        Route::post('/email-verification-resend', [\App\Http\Controllers\Auth\VerifyEmailController::class, 'resend'])
            ->name('email-verification-resend');
        Route::get('/email-submit-verification', [\App\Http\Controllers\Auth\VerifyEmailController::class, 'verify'])
            ->name('email-submit-verification');

        Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'show'])
            ->name('login');
        Route::post('/logger', [\App\Http\Controllers\Auth\LoginController::class, 'auth'])
            ->name('logger');

        Route::get('/forgot-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'show'])
            ->name('forgot-password');
        Route::post('/forgot-submit-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'forgetPassword'])
            ->name('forgot-submit-password');

        Route::get('/reset-password/{token}', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'show'])
            ->name('reset-password');
        Route::post('/reset-submit-password', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'resetPassword'])
            ->name('reset-submit-password');
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
