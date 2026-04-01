<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public — Landing Page
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('landing.pages.home');
})->name('home');

/*
|--------------------------------------------------------------------------
| Admin Login — Accessible ONLY via direct URL: /admin/login
| No login button exists anywhere on the public site.
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('pages.auth.login');
});

Route::get('/dashboard', function () {
    return view('modules.common.dashboard');
});