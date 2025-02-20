<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;

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

// Route dasar
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route untuk halaman home
Route::get("/home", function(){
    return view("home");
});


// Route redirect
Route::redirect('/welcome', '/');
Route::redirect('/welcome301', '/', 301);
Route::redirect('/welcome302', '/', 302);
Route::redirect('/welcome303', '/', 303);
Route::redirect('/welcome307', '/', 307);
Route::redirect('/welcome308', '/', 308);

// Route dengan Regular Expression Constraints
Route::get('/hai/{name}', function ($name) {
    return "Halo, $name!";
})->where('name', '[A-Za-z]+');

// Route dengan Global Constraints (dari providers)
Route::get('/nameGlobal/{nameGlobal}', function ($nameGlobal) {
    return "Halo, $nameGlobal!";
});
Route::get('/idGlobal/{idGlobal}', function ($idGlobal) {
    return "User ID: $idGlobal";
});

// Route Encoded Forward Slashes
Route::get('/search/{search}', function ($search) {
    return $search;
})->where('search', '.*');



// Subdomain routing
Route::domain('{account}.example.com')->group(function () {
    Route::get('/', function ($account) {
        return "Ini halaman untuk akun: " . $account;
    });
});

// Route dengan prefix
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Ini halaman dashboard admin.";
    });
    Route::get('/db', function () {
        return "Ini halaman db admin.";
    });
});

// Route dengan name prefix
Route::name('pre')->prefix('cobalagi')->group(function () {
    Route::get('/dashboard', function () {
        return "Ini halaman dashboard previx name.";
    })->name('pv.dashboard');

    Route::get('/user', function () {
        return "Ini halaman daftar pengguna previx name.";
    })->name('pv.user');
});

// Route untuk frontend
Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::resource('home', HomeController::class);
});

// Route untuk frontend
Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::resource('home', HomeController::class);
});

//Route untuk backend
Route::group(['namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('product', ProductController::class);
});
