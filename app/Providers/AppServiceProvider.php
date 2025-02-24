<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\TerminableMiddleware;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Mendaftarkan TerminableMiddleware di dalam container
        $this->app->singleton(TerminableMiddleware::class);
    }

    public function boot()
    {
        // Mendaftarkan middleware jika perlu
    }
}
