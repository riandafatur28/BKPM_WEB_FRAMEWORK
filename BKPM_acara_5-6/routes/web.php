<?php

use App\Http\Controllers\DetailProfilController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;

Route::get('user', [ManagementUserController::class, 'index']);
Route::get('user/create', [ManagementUserController::class, 'create']);
Route::post('user', [ManagementUserController::class, 'store']);
Route::get('user/{id}', [ManagementUserController::class, 'show']);
Route::get('user/{id}/edit', [ManagementUserController::class, 'edit']);
Route::put('user/{id}', [ManagementUserController::class, 'update']);
Route::delete('user/{id}', [ManagementUserController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function(){
    return view("home");
});

Route::get('/landing', function() {
    return view('index');
});

Route::get('sayHello',[LandingController::class, 'viewLanding']);

