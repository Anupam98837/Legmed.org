<?php

use App\Http\Controllers\API\EnquiryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
 

Route::post('/auth/login',  [UserController::class, 'login']);
Route::post('/auth/logout', [UserController::class, 'logout'])
    ->middleware('checkRole');
Route::get('/auth/check',   [UserController::class, 'authenticateToken']);
Route::get('/auth/me-role', [UserController::class, 'getMyRole']);
Route::get('/profile', [UserController::class, 'getProfile']);
// Read-only (lists + show) – allow exam staff + admins
Route::middleware(['checkRole:examiner,admin,super_admin,academic_counsellor'])->group(function () {
    Route::get('/users',      [UserController::class, 'index']);   // paginated
    Route::get('/users/all',  [UserController::class, 'all']);     // lightweight list
    Route::get('/users/{id}', [UserController::class, 'show']);    // single user detail
});
 
// Full management – only admins / super admins
Route::middleware(['checkRole:admin,super_admin,student,examiner,academiccounsellor'])->group(function () {
    Route::post('/users',                        [UserController::class, 'store']);
    Route::match(['put','patch'], '/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}',                 [UserController::class, 'destroy']);
    Route::post('/users/{id}/restore',           [UserController::class, 'restore']);
    Route::delete('/users/{id}/force',           [UserController::class, 'forceDelete']);
    Route::patch('/users/{id}/password',         [UserController::class, 'updatePassword']);
    Route::post('/users/{id}/image',             [UserController::class, 'updateImage']);

});