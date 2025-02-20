<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Mulai Acara 3
 * @link https://laravel.com/docs/11.x/routing dokumentasi terkait routing di laravel
 */

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('user/{id}', fn($id) => 'Hello ' . $id);

Route::get('post/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});

// Daftar Metode
// dokumentasi terkait daftar metode yang tersedia https://laravel.com/docs/11.x/routing#available-router-methods
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

Route::match(['get', 'post'], '/match', fn() => 'hello');

Route::get('search/{search}', fn($search) => $search)->where('search', '.*');

/**
 * Selesai Acara 3
 */

// --------------------------------------------------------

/**
 * Mulai Acara 4
 */

Route::get('user/{id}/profile', function ($id) {
    return 'Hello ' . $id;
})->name('profile')->middleware('check.profile');

Route::get('user/{id}/profiles', function ($id) {

})->name('profiles');

// Mengetes route bernama
Route::get('test-url', function () {
    return route('profiles', ['id' => 1, 'photos' => 'yes']);
});

/** Menerapkan middleware ke semua route dalam group. middleware 'first' dan 'second' pada dasarnya tidak ada/belum dibuat, hanya sebagai sample.
 *  cek di bootstrap/app.php untuk melihat middleware yang terdaftar atau jalankan php artisan route:list -v
 * @link https://laravel.com/docs/11.x/middleware dokumentasi terkait middleware
 * @link https://laravel.com/docs/11.x/routing#listing-your-routes dokumentasi terkait perintah untuk menampilkan daftar route
 */
Route::middleware(['first', 'second'])->group(function () {
    Route::get('product', function () {

    });

    Route::get('member', function () {

    });
});

Route::
        namespace('Admin')->group(function () { });

/**
 * @link https://laravel.com/docs/11.x/routing#route-group-subdomain-routing dokumentasi terkait subdomain routing
 */
Route::domain('{acount}.myapp.com')->group(function () {
    Route::get('users/{id}', fn($account, $id) => '');
});

/**
 * @link https://laravel.com/docs/11.x/routing#route-group-prefixes dokumentasi terkait Route menggunakan prefix
 */
Route::prefix('manager')->group(function () {
    Route::get('users/{id}', fn($account, $id) => '')->name('users');
});

/**
 * Selesai Acara 4
 */

// ------------------------------------------------------------

/**
 * Mulai Acara 5
 */

/**
 * Metode resource akan menciptakan beberapa route untuk menangani berbagai tindakan terhadapt resource dalam hal ini book.
 * Jalankan perintah php artisan route:list untuk melihat hasilnya.
 * @link https://laravel.com/docs/11.x/controllers#actions-handled-by-resource-controllers
 */

Route::resource('book', BookController::class);

/**
 * Selesai Acara 5
 */

// ----------------------------------------------------------

/**
 * Mulai Acara 6
 */

Route::get('beranda', [BookController::class, 'index']);
