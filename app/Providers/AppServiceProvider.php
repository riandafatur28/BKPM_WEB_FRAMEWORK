<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Bagian BKPM Acara 3
        // Untuk menambahkan constrain route global, letakkan constrain disini menggunakan metode pattern. karena laravel 11 sudah menghapus RouteServiceProvider.php
        // contoh
        // Route::pattern('id', '[0-9]+');
    }
}
