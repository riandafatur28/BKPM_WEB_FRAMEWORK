<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\Backend\PendidikanController;
use App\Http\Controllers\Backend\PengalamanKerjaController;


// Route untuk user management
Route::get('user', [ManagementUserController::class, 'index']);
Route::get('user/create', [ManagementUserController::class, 'create']);
Route::post('user', [ManagementUserController::class, 'store']);
Route::get('user/{id}', [ManagementUserController::class, 'show']);
Route::get('user/{id}/edit', [ManagementUserController::class, 'edit']);
Route::put('user/{id}', [ManagementUserController::class, 'update']);
Route::delete('user/{id}', [ManagementUserController::class, 'destroy']);

// Route untuk halaman welcome
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route untuk frontend home
Route::get("/home", [HomeController::class, 'index'])->name('home');

// Route untuk backend dashboard dan produk
Route::resource('dashboard', DashboardController::class);
Route::resource('product', ProductController::class);

// Middleware auth untuk halaman profile admin
Route::get('/admin/profile', function () {
    // Logic untuk halaman profile admin
})->middleware('auth');

// Route dengan middleware multiple
Route::get('/', function () {
    // Logic di sini
})->middleware(['first', 'second']); // Pastikan middleware 'first' dan 'second' ada

// Route dengan CheckAge middleware
Route::get('admin/profile', function () {
    // Logic untuk halaman profile admin
})->middleware(CheckAge::class);

use Illuminate\Support\Facades\Auth;

Auth::routes();


// Route untuk redirect dan constraints
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

// Route dengan Global Constraints
Route::get('/nameGlobal/{nameGlobal}', function ($nameGlobal) {
    return "Halo, $nameGlobal!";
});
Route::get('/idGlobal/{idGlobal}', function ($idGlobal) {
    return "User ID: $idGlobal";
});

// Route untuk search dengan encoded forward slashes
Route::get('/search/{search}', function ($search) {
    return $search;
})->where('search', '.*');

// Subdomain routing
Route::domain('{account}.example.com')->group(function () {
    Route::get('/', function ($account) {
        return "Ini halaman untuk akun: " . $account;
    });
});

// Route dengan prefix untuk admin
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

// // Route dengan middleware admin
// Route::group(['middleware' => ['admin']], function () {
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard');
//     });

//     Route::get('/admin/settings', function () {
//         return view('admin.settings');
//     });
// });

// Route Group Middleware acara 12
Route::get('/', function () {
})->middleware('web');

Route::group(['middleware' => ['web']], function () {

});

Route::middleware(['web', 'subscribed'])->group(function () {

});

Route::put('post/{id}', function ($id) {

})->middleware('role:editor');


//backend route
Route::prefix('backend')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard.backend');

    //pendidikan
    Route::get('pendidikan', [PendidikanController::class, 'showPendidikan'])->name('pendidikan.backend');
    Route::get('pendidikan/add', [PendidikanController::class, 'showPendidikanAdd'])->name('pendidikan.backend.add');
    Route::post('pendidikan/store', [PendidikanController::class, 'storePendidikan'])->name('pendidikan.store');
    Route::get('pendidikan/edit/{id}', [PendidikanController::class, 'editPendidikan'])->name('edit.pendidikan');
    Route::put('pendidikan/update/{id}', [PendidikanController::class, 'updatePendidikan'])->name('update.pendidikan');
    Route::delete('pendidikan/delete/{id}', [PendidikanController::class, 'deletePendidikan'])->name('delete.pendidikan');

    //pengalaman kerja
    Route::get('pengalamankerja', [PengalamanKerjaController::class, 'showPengalamanKerja'])->name('pengalamankerja.backend');
    Route::get('pengalamankerja/add', [PengalamanKerjaController::class, 'showPengalamanKerjaAdd'])->name('pengalamankerja.backend.add');
    Route::post('pengalamankerja/store', [PengalamanKerjaController::class, 'storePengalamanKerja'])->name('pengalamankerja.store');
    Route::get('pengalamankerja/edit/{id}', [PengalamanKerjaController::class, 'editPengalamanKerja'])->name('pengalamankerja.edit');
    Route::put('pengalamankerja/update/{id}', [PengalamanKerjaController::class, 'updatePengalamanKerja'])->name('pengalamankerja.update');
    Route::delete('pengalamankerja/delete/{id}', [PengalamanKerjaController::class, 'deletePengalamanKerja'])->name('pengalamankerja.delete');

    //bisa juga menggunakan resource
    // php artisan make:controller nama --resource
    // Route::resource(PendidikanController::class);
    // Route::resource(PengalamanKerjaController::class);
});
